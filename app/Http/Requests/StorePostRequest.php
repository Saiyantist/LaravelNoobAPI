<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'bail | required | max:50',
            'body' => 'required | min:2',
        ];
     
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Need ng title, boss.',
            'title.max' => 'Konti lang dapat sa 50 chars, boss.',
            'body.required' => 'Need at least 2 chars, boss',
            'body.min' => 'Need at least 2 chars, boss',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Post Title',
            'body' => 'Post Body',
        ];
    }
}
