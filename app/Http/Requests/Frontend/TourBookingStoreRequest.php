<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
class TourBookingStoreRequest extends FormRequest
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
            'name' => ['required'],
            'agent_id' => 'nullable',
            'booking_status' => 'nullable',
            'name' => ['required'],
            'email' => ['required'],
            'cell' => ['required'],
            'phone' => ['required'],
            'departure_city' => ['required'],
            'departure_date' => ['required'],
            'adults' => ['required'],
            'child' => 'nullable',
            'infants' => 'nullable',
            'contact_preference' => 'nullable',
            'best_time_to_call' => 'nullable',
            'comment' => 'nullable',
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
            'name' => 'Name field is required',
            'booking_id' => 'Select Package',
            'email' => 'Email field is Required',
            'cell' => 'Cell field is Required',
            'phone' => 'Phone field is Required',
            'phone' => 'Phone field is Required',
            'departure_city' => 'Departure city is Required',
            'departure_date' => 'Departure date is Required',
            'adult' => 'Adult field is Required',
        
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
        throw (new ValidationException($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo($this->getRedirectUrl());
    }
}
