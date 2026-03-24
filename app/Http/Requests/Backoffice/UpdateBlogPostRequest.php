<?php

namespace App\Http\Requests\Backoffice;

class UpdateBlogPostRequest extends StoreBlogPostRequest
{
    public function rules(): array
    {
        $rules = parent::rules();
        $rules['remove_thumbnail'] = ['nullable', 'boolean'];

        return $rules;
    }
}
