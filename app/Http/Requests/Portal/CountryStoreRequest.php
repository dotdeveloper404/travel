<?php

namespace App\Http\Requests\Portal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CountryStoreRequest extends FormRequest
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

        if ($this->isMethod('post')) {
            return [
                'country.name' => ['required', 'string'],
                'country.capital' => ['required', 'string'],
                'country.meta_title' => ['nullable', 'string'],
                'country.meta_description' => ['nullable', 'string'],
                'country.content' => ['nullable', 'string'],
                'country.top' => ['required', 'integer'],
            ];
        } else if ($this->isMethod('put')) {
            return [
                'country.name' => ['required', 'string'],
                'country.capital' => ['required', 'string'],
                'country.meta_title' => ['nullable', 'string'],
                'country.meta_description' => ['nullable', 'string'],
                'country.content' => ['nullable', 'string'],
                'country.top' => ['required', 'integer'],
            ];
        }
    }

    /* Get custom messages for validator errors.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'city.name' => 'Name field is required',
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
