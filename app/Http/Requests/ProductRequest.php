<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_ar'       => 'required',
            'title_en'       => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'image'          => 'required|mimes:jpeg,png,jpg,gif',
            'price'          => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required'       => __('The Title In Arabic is required'),
            'title_en.required'       => __('The Title In English is required'),
            'description_ar.required' => __('The Description In Arabic is required'),
            'description_en.required' => __('The Description In English is required'),
            'image.required'          => __('The image is required'),
            'image.mimes'             => __('The image is required type: jpeg,png,jpg,gif'),
            'price.required'          => __('The price is required'),
        ];
    }
}
