<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class TourBookingUpdateRequest extends FormRequest
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
            'booking.booking_status' => ['required'],
            'booking.name' => ['required'],
            'booking.email' => ['required'],
            'booking.cell' => ['required'],
            'booking.phone' => ['required'],
            'booking.departure_city' => ['required'],
            'booking.departure_date' => ['required'],
            'booking.adults' => ['required'],
            'booking.child' => 'nullable',
            'booking.infants' =>'nullable',
            'booking.contact_preference' =>'nullable',
            'booking.best_time_to_call' =>'nullable',
            'booking.comment' =>'nullable',

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
            'booking.booking_status' => 'This field is required',
            'booking.name' => 'This field is required',
            'booking.email' => 'This field is required',
            'booking.cell' => 'This field is required',
            'booking.phone' => 'This field is required',
            'booking.departure_city' => 'This field is required',
            'booking.departure_date' => 'This field is required',
            'booking.adults' => 'This field is required',
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
