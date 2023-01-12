<?php

namespace App\Http\Requests\Portal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TransportStoreRequest extends FormRequest
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
            'transport.company' => ['required', 'string'],
            'transport.type' => ['required'],
            'transport.description' => 'nullable',
            'transport.model' => 'nullable',
            'transport.made_year' => 'nullable',
            'transport.mileage' => 'nullable',
            'transport.version' => 'nullable',
            'transport.horse_power' => 'nullable',
            'transport.condition' => 'nullable',
            'transport.amenities' => 'nullable',
            'transport.luggage' => 'nullable',
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
            'transport.company' =>  'Company field is required',
            'transport.type' => 'Type field is required',
            
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
