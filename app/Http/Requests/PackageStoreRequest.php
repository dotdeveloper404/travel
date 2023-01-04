<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class PackageStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'package.package_name' => [
                'required',
                Rule::unique('packages','package_name')
            ],
            'package.package_type' => ['required'],
            'package.product_type' => ['required'],
            'package.traveling_date_start' => ['required'],
            'package.traveling_date_end' => ['required'],
            'package.nights' => ['required'],
            'package.days' => ['required'],
            'package.package_price' => ['required'],
            'package.discount' => 'nullable',
            'package.net_amount' => ['required'],
            'package.seasonality' => 'nullable',
            'package.city' => 'nullable',
            'package.description' => 'nullable',
            'package.features' => 'nullable',
            'package.itenary' => 'nullable',
            'package.location_map' => 'nullable',
            'package.faqs' => 'nullable',
        ];
    }

      /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'package.package_name.unique' => 'The package name has already been taken.',
            'package.package_type' => 'The package type field is required',
            'package.product_type' => 'The product type field is required',
            'package.traveling_date_start' => 'The traveling date start field is required',
            'package.traveling_date_end' => 'The traveling date end field is required',
            'package.nights' => 'The nights  field is required',
            'package.days' => 'The days field is required',
            'package.package_price' => 'The package price field is required',
        ];
    }


    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => false
        ], 422));
    }
}
