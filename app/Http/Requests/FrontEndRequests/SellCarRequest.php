<?php

namespace App\Http\Requests\FrontEndRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SellCarRequest extends FormRequest
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
            'name' => ['string', 'required', 'min:3', 'max:50'],
            'phone' => ['string', 'required','max:20'],
            'car_brand' => ['required'],
            'model' => ['required'],
            'car_name' => ['required'],
            'year' => ['required','max:'.date('Y'),'integer','min:1990'],
            'maileage' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'transmission' => ['required', 'in:automatic,manual'],
            'fuel_type' => ['required'],
            'message' => ['string','nullable'],
            'images' => ['required', 'array'],
            'images.*' => [
                'mimes:jpg,png,jpeg,gif,svg',
                'dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
                'max:2048'
            ],


        ];
    }
}
