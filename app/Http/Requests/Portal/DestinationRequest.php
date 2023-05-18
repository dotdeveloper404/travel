<?php

namespace App\Http\Requests\Portal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class DestinationRequest extends FormRequest
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
                'destination.name' => ['required', 'string'],
                'destination.meta_title' => ['nullable', 'string'],
                'destination.meta_description' => ['nullable', 'string'],
                'destination.city_id' => ['required', 'integer'],
                'destination.top' => ['required', 'integer'],
                'destination.content' => ['nullable', 'string'],
            ];
        } else if ($this->isMethod('put')) {
            return [
                'destination.name' => ['required', 'string'],
                'destination.city_id' => ['required', 'integer'],
                'destination.meta_title' => ['nullable', 'string'],
                'destination.meta_description' => ['nullable', 'string'],
                'destination.content' => ['nullable', 'string'],
                'destination.top' => ['nullable', 'integer'],
            ];
        }
    }

    public function messages()
    {
        return [
            'destination.name' => 'name field is required',
            'destination.city_id' => 'select city.'
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
