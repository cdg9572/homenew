<?php

namespace App\Http\Requests\Backoffice;

use App\Models\BlogPost;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBlogPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'is_notice' => ['nullable', 'boolean'],
            'category' => ['required', 'string', Rule::in(array_keys(BlogPost::CATEGORIES))],
            'title' => ['required', 'string', 'max:255'],
            'tags_input' => ['nullable', 'string', 'max:500'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'is_published' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'sections' => ['required', 'array', 'min:1', 'max:10'],
            'sections.*.subtitle' => ['nullable', 'string', 'max:255'],
            'sections.*.content' => ['nullable', 'string'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($v): void {
            $sections = $this->input('sections', []);
            $has = false;
            foreach ($sections as $section) {
                $subtitle = trim((string) ($section['subtitle'] ?? ''));
                $content = trim((string) ($section['content'] ?? ''));
                if ($subtitle !== '' || $content !== '') {
                    $has = true;
                    break;
                }
            }
            if (! $has) {
                $v->errors()->add('sections', '목차 제목 또는 본문을 1개 이상 입력해 주세요.');
            }
        });
    }

    public function messages(): array
    {
        return [
            'category.required' => '카테고리를 선택해 주세요.',
            'title.required' => '제목을 입력해 주세요.',
            'sections.required' => '목차·본문 구간을 1개 이상 입력해 주세요.',
            'sections.max' => '목차·본문 구간은 최대 10개까지 가능합니다.',
            'thumbnail.max' => '썸네일 파일은 5MB 이하로 업로드해 주세요.',
        ];
    }
}
