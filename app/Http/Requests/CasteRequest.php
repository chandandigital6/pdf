<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasteRequest extends FormRequest
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
            'certificate_number' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:male,female',
            'f_name' => 'nullable|string|max:255',
            'm_name' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'category'=> 'nullable|string',
            'sub_category'=> 'nullable|string',
            'address' => 'nullable|string|max:255',
            'issu_date' => 'nullable|date',
            'status' => 'nullable|string'
        ];
    }
}
