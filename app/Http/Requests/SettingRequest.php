<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required',
            'address_ar' => 'required',
            'address_en' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'whatsapp' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => __('The Title In Arabic is required'),
            'title_en.required' => __('The Title In English is required'),
            'address_ar.required' => __('The Address In Arabic is required'),
            'address_en.required' => __('The Address In English is required'),
            'phone.required' => __('The Phone Is Required'),
            'email.required' => __('The Email Is Required'),
            'facebook.required' => __('The Facebook Is Required'),
            'whatsapp.required' => __('The Whatsapp Is Required'),
        ];
    }
}
