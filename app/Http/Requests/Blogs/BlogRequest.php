<?php

namespace App\Http\Requests\Blogs;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'blog_category_id'         => 'required|exists:blog_categories,id',
            'title'         => 'required|array',
            'title.*'       => [
                'required',
                'string',
                'max:255',
                // \CodeZero\UniqueTranslation\UniqueTranslationRule::for('what_we_dos')->ignore($this->id)
            ],
            'description'   => 'required|array',
            'description.*' => 'required|string|max:1000',
            'content'   => 'required|array',
            'content.*' => 'required|string|max:1000',
            'position'      => 'required',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'images'   => 'nullable|array|max:10',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'active'        => 'required|in:0,1',
        ];
    }
}
