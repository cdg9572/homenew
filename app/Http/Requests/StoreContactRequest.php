<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactRequest extends FormRequest
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
            'attachments' => ['nullable', 'array', 'max:3'],
            'attachments.*' => ['file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,gif,webp,doc,docx,xls,xlsx,ppt,pptx,zip'],
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
            'attachments' => '첨부파일',
        ];
    }

    public function messages(): array
    {
        return [
            'company.required' => '소속을 입력해 주세요.',
            'company.max' => '소속은 255자 이내로 입력해 주세요.',
            'contact_person.required' => '담당자 성함을 입력해 주세요.',
            'contact_person.max' => '담당자 성함은 100자 이내로 입력해 주세요.',
            'email.required' => '이메일을 입력해 주세요.',
            'email.email' => '올바른 이메일 형식을 입력해 주세요.',
            'email.max' => '이메일은 255자 이내로 입력해 주세요.',
            'service.required' => '관심 서비스를 1개 이상 선택해 주세요.',
            'service.min' => '관심 서비스를 1개 이상 선택해 주세요.',
            'service.*.in' => '선택한 관심 서비스를 확인해 주세요.',
            'current_site.max' => '현재 사이트 주소는 2048자 이내로 입력해 주세요.',
            'message.max' => '문의 내용은 10000자 이내로 입력해 주세요.',
            'budget.max' => '프로젝트 예산은 500자 이내로 입력해 주세요.',
            'attachments.max' => '첨부파일은 최대 3개까지 업로드할 수 있습니다.',
            'attachments.*.file' => '첨부파일을 확인해 주세요.',
            'attachments.*.max' => '첨부파일 하나당 최대 10MB까지 업로드할 수 있습니다.',
            'attachments.*.mimes' => '허용되지 않는 파일 형식입니다. (pdf, 이미지, 문서, 압축 파일 등)',
        ];
    }
}
