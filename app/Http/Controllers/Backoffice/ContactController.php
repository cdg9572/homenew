<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backoffice\UpdateContactRequest;
use App\Models\Contact;
use App\Services\Backoffice\ContactService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    public function __construct(private ContactService $contactService) {}

    public function index(Request $request): View
    {
        $contacts = $this->contactService->getPaginatedList($request);

        return view('backoffice.contacts.index', [
            'contacts' => $contacts,
            'statuses' => Contact::STATUSES,
        ]);
    }

    public function edit(Contact $contact): View
    {
        return view('backoffice.contacts.edit', [
            'contact' => $contact,
            'serviceOptions' => Contact::SERVICE_OPTIONS,
            'statuses' => Contact::STATUSES,
        ]);
    }

    public function update(UpdateContactRequest $request, Contact $contact): RedirectResponse
    {
        $validated = $request->validated();
        $this->contactService->update($contact, $validated);

        return redirect()
            ->route('backoffice.contacts.index')
            ->with('success', '문의 내용이 수정되었습니다.');
    }

    public function downloadAttachment(Contact $contact, string $index): Response
    {
        if (! ctype_digit($index)) {
            abort(404);
        }
        $index = (int) $index;

        $attachments = $contact->attachments ?? [];
        if (! array_key_exists($index, $attachments)) {
            abort(404);
        }
        $item = $attachments[$index];
        $path = $item['path'] ?? '';
        $originalName = $item['original_name'] ?? '첨부파일';

        if ($path === '' || ! Storage::disk('public')->exists($path)) {
            abort(404);
        }

        return Storage::disk('public')->download($path, $originalName);
    }
}
