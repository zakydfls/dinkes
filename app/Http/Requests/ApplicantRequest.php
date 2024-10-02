<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ApplicantRequest extends FormRequest
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
            'name' => ['required'],
            'name_2' => ['nullable', 'required_with:nim_2'],
            'name_3' => ['nullable', 'required_with:nim_3'],
            'email' => ['required', 'email', Rule::unique('applicants_data', 'email')],
            'no_hp' => ['required', 'numeric', Rule::unique('applicants_data', 'no_hp')],
            'nim' => ['required', Rule::unique('applicants_data', 'nim')],
            'nim_2' => ['nullable', 'required_with:name_2', Rule::unique('applicants_data', 'nim')],
            'nim_3' => ['nullable', 'required_with:name_3', Rule::unique('applicants_data', 'nim')],
            'asal_instansi' => ['required'],
            'tgl_masuk' => ['required', 'date'],
            'tgl_keluar' => ['required', 'date'],
            'file' => ['required', 'mimes:pdf,doc,docx', 'max:10048'],
        ];
    }
}
