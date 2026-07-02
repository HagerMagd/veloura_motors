<?php

namespace App\Http\Requests\FrontEndRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string','min:5','max:50'],
            'email'=>['required','email'],
            'subject'=>['required','string','min:5','max:30'],
            'message'=>['required','string','min:20','max:100'],
            

        ];
    }
}
