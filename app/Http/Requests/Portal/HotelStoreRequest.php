<?php

namespace App\Http\Requests\Portal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class HotelStoreRequest extends FormRequest
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
            'hotel.name' => ['required', 'string'],
            'hotel.description' => ['required'],
            'hotel.city' => ['required'],
            'hotel.state' => ['required'],
            'hotel.country' => ['required'],
            'hotel.stars' => ['required'],
            'hotel.contact_no_1' => ['required'],
            'hotel.contact_no_2' => 'nullable',
            'hotel.property_info' => 'nullable',
            'hotel.main_amenities' => 'nullable',
            'hotel.about_this_area' => 'nullable',
            'hotel.about_this_property' => 'nullable',
            'hotel.at_a_glance' => 'nullable',
            'hotel.property_amenities' => 'nullable',
            'hotel.room_amenities' => 'nullable',
            'hotel.type' => 'nullable',
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
            'hotel.name' =>  'Hotel Name field is required',
            'hotel.description' => 'Description field is required',
            'hotel.city' => 'City field is required',
            'hotel.state' =>'State field is required',
            'hotel.country' =>'Country field is required',
            'hotel.stars' => 'Stars field is required',
            'hotel.contact_no_1' => 'Contact No field is required',
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
