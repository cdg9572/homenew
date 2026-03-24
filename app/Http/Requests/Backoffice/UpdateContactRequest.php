<?php

namespace App\Http\Requests\Backoffice;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company' => ['required', 'string', 'max:255'],
            'contact_person' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'service' => ['required', 'array', 'min:1'],
            'service.*' => ['string', Rule::in(Contact::SERVICE_OPTIONS)],
            'current_site' => ['nullable', 'string', 'max:2048'],
            'message' => ['nullable', 'string', 'max:10000'],
            'budget' => ['nullable', 'string', 'max:500'],
            'status' => ['required', 'string', Rule::in(Contact::STATUSES)],
            'admin_memo' => ['nullable', 'string', 'max:10000'],
        ];
    }

    public function attributes(): array
    {
        return [
            'company' => '소속',
            'contact_person' => '담당자 성함',
            'email' => '이메일',
            'service' => '관심 서비스',
            'current_site' => '현재 사이트',
            'message' => '문의 내용',
            'budget' => '프로젝트 예산',
            'status' => '처리 상태',
            'admin_memo' => '관리자 메모',
        ];
    }

    public function messages(): array
    {
        return [
            'service.required' => '관심 서비스를 1개 이상 선택해 주세요.',
            'service.min' => '관심 서비스를 1개 이상 선택해 주세요.',
        ];
    }
}
