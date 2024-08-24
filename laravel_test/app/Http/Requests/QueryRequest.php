<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QueryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 
     * authorization
     * authentication
     * 
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
            'title' => 'required|min:19|max:20',
            'email' => 'required|email',
            'comment' => 'required',
            'image' => 'required|image',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'username'
        ];
    }

    public function messages(): array
    {
        return [
            'title.min' => 'min characters is 19 :)',
        ];
    }
}
