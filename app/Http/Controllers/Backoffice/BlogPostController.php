<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\StoreBlogPostRequest;
use App\Http\Requests\Backoffice\UpdateBlogPostRequest;
use App\Models\BlogPost;
use App\Models\BlogPostEventLog;
use App\Services\Backoffice\BlogPostService;
use App\Services\BlogService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function __construct(
        private BlogPostService $blogPostService,
        private BlogService $blogService
    ) {}

    public function index(Request $request): View
    {
        return view('backoffice.blog-posts.index', [
            'posts' => $this->blogPostService->getPaginatedList($request),
            'categories' => BlogPost::CATEGORIES,
        ]);
    }

    public function create(): View
    {
        return view('backoffice.blog-posts.create', [
            'categories' => BlogPost::CATEGORIES,
        ]);
    }

    public function store(StoreBlogPostRequest $request): RedirectResponse
    {
        $payload = $request->validated();
        if ($request->hasFile('thumbnail')) {
            $payload['thumbnail'] = $request->file('thumbnail');
        }

        $this->blogPostService->create($payload);

        return redirect()->route('backoffice.blog-posts.index')
            ->with('success', '블로그 게시글이 등록되었습니다.');
    }

    public function edit(BlogPost $blogPost): View
    {
        $blogPost->load(['sections']);

        return view('backoffice.blog-posts.edit', [
            'blogPost' => $blogPost,
            'categories' => BlogPost::CATEGORIES,
        ]);
    }

    public function update(UpdateBlogPostRequest $request, BlogPost $blogPost): RedirectResponse
    {
        $payload = $request->validated();
        if ($request->hasFile('thumbnail')) {
            $payload['thumbnail'] = $request->file('thumbnail');
        }
        $payload['remove_thumbnail'] = $request->boolean('remove_thumbnail');

        $this->blogPostService->update($blogPost, $payload);

        return redirect()->route('backoffice.blog-posts.index')
            ->with('success', '블로그 게시글이 수정되었습니다.');
    }

    public function destroy(BlogPost $blogPost): RedirectResponse
    {
        $this->blogPostService->delete($blogPost);

        return redirect()->route('backoffice.blog-posts.index')
            ->with('success', '블로그 게시글이 삭제되었습니다.');
    }

    public function recordEvent(Request $request, BlogPost $blogPost): JsonResponse
    {
        $validated = $request->validate([
            'event_type' => ['required', 'string', 'in:'.implode(',', BlogPostEventLog::EVENTS)],
            'session_key' => ['required', 'string', 'max:128'],
            'dwell_seconds' => ['nullable', 'integer', 'min:0', 'max:7200'],
            'scroll_depth' => ['nullable', 'integer', 'min:0', 'max:100'],
        ]);

        if ($validated['event_type'] === BlogPostEventLog::EVENT_VIEW) {
            $this->blogService->recordView($blogPost, $validated['session_key']);
        } else {
            $this->blogService->recordEvent(
                $blogPost,
                $validated['session_key'],
                $validated['event_type'],
                [
                    'dwell_seconds' => $validated['dwell_seconds'] ?? null,
                    'scroll_depth' => $validated['scroll_depth'] ?? null,
                ]
            );
        }

        return response()->json(['success' => true]);
    }

    public function like(Request $request, BlogPost $blogPost): JsonResponse
    {
        $validated = $request->validate([
            'session_key' => ['required', 'string', 'max:128'],
        ]);

        $this->blogService->recordEvent(
            $blogPost,
            $validated['session_key'],
            BlogPostEventLog::EVENT_LIKE
        );

        return response()->json(['success' => true]);
    }
}
