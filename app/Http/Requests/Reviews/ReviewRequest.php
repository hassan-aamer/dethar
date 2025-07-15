<?php

namespace App\Http\Requests\Reviews;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'title.*'       => ['required','string','max:255'],
            'description'   => 'required|array',
            'description.*' => 'required|string|max:1000',
            'name'          => 'required|array',
            'name.*'        => 'required|string|max:255',
            'position'      => 'required',
            'stars'         => 'nullable|numeric|min:0|max:5',
            'active'        => 'required|in:0,1',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
    }
}
