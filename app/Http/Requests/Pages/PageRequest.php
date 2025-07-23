<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'title'         => 'required|array',
            'title.*'       => ['required', 'string', 'max:255'],
            'description'   => 'required|array',
            'description.*' => 'required|string|max:1000',
            'name'          => 'nullable|array',
            'name.*'        => 'nullable|string|max:255',
            'content'       => 'nullable|array',
            'content.*'     => 'nullable|string|max:1000',
            'position'      => 'required',
            'active'        => 'nullable|in:0,1',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
    }
}
