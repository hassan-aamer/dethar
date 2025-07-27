<?php

namespace App\Http\Requests\TechnicalDataSheets;

use Illuminate\Foundation\Http\FormRequest;

class TechnicalDataSheetsRequest extends FormRequest
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
            'description'   => 'nullable|array',
            'description.*' => 'nullable|string|max:1000',
            // 'name'          => 'required|array',
            // 'name.*'        => 'required|string|max:255',
            // 'content'       => 'required|array',
            // 'content.*'     => 'required|string|max:255',
            'position'      => 'required',
            'active'        => 'required|in:0,1',
            'file'          => 'nullable|mimes:pdf|max:20480',
        ];
    }
}
