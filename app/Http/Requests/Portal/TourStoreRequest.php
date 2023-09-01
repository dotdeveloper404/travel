<?php

namespace App\Http\Requests\Portal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class TourStoreRequest extends FormRequest
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
                'tour.tour_name' => [
                    'required',
                    Rule::unique('tours','tour_name')
                ],
                'tour.tour_name' => ['required', 'string'],
                'tour.tour_type' => ['required'],
                'tour.product_type' => ['required'],
                'tour.traveling_date_start' => ['nullable'],
                'tour.traveling_date_end' => ['nullable'],
                'tour.nights' => ['required'],
                'tour.days' => ['required'],
                'tour.tour_price' => ['required'],
                'tour.discount' => 'nullable',
                'tour.net_amount' => ['required'],
                'tour.seasonality' => 'nullable',
                'tour.city' => 'nullable',
                'tour.description' => 'nullable',
                'tour.features' => 'nullable',
                'tour.location_map' => 'nullable',
                'tour.faqs' => 'nullable',
                'tour.stars' => 'nullable',
                'tour.reviews' => 'nullable',
                'tour.is_transport_included' => 'nullable',
                'tour.acommodation' => 'nullable',
                'tour.is_acommodation_included' => 'nullable',
                'tour.guide' => 'nullable',
                'tour.is_guide_included' => 'nullable',
                'tour.additional_services' => 'nullable',
                'tour.is_additional_services_included' => 'nullable',
                'tour.is_visa_included' => 'nullable',
                'tour.visa' => 'nullable',
                'tour.is_flights_included' => 'nullable',
                'tour.flights' => 'nullable',
                'tour.is_meals_included' => 'nullable',
                'tour.meals' => 'nullable',
                'tour.is_insurance_included' => 'nullable',
                'tour.insurance' => 'nullable',
                'tour.is_optional_included' => 'nullable',
                'tour.optional' => 'nullable',
                'tour.more_information' => 'nullable',
                'tour.destinations' => 'nullable',
                'tour.languages' => 'nullable',
                'tour.recomended' => 'nullable',
                'tour.languages' => 'nullable',
                'tour.recomended' => 'nullable',
                'tour.free_cancelation' => 'nullable',
                'tour.deals_and_discount' => 'nullable',
                'tour.group_type' => 'nullable',
                'tour.duration' => 'nullable',
                'tour.meta_title' => 'nullable',
                'tour.meta_description' => 'nullable',
            ];
        }
    
        if ($this->isMethod('put')) {
            return [
                'tour.tour_name' => ['required', 'string'],
                'tour.tour_type' => ['required'],
                'tour.product_type' => ['required'],
                'tour.traveling_date_start' => ['required'],
                'tour.traveling_date_end' => ['required'],
                'tour.nights' => ['required'],
                'tour.days' => ['required'],
                'tour.tour_price' => ['required'],
                'tour.discount' => 'nullable',
                'tour.net_amount' => ['required'],
                'tour.seasonality' => 'nullable',
                'tour.city' => 'nullable',
                'tour.description' => 'nullable',
                'tour.features' => 'nullable',
                'tour.location_map' => 'nullable',
                'tour.faqs' => 'nullable',
                'tour.stars' => 'nullable',
                'tour.reviews' => 'nullable',
                'tour.is_transport_included' => 'nullable',
                'tour.acommodation' => 'nullable',
                'tour.is_acommodation_included' => 'nullable',
                'tour.guide' => 'nullable',
                'tour.is_guide_included' => 'nullable',
                'tour.additional_services' => 'nullable',
                'tour.is_additional_services_included' => 'nullable',
                'tour.is_visa_included' => 'nullable',
                'tour.visa' => 'nullable',
                'tour.is_flights_included' => 'nullable',
                'tour.flights' => 'nullable',
                'tour.is_meals_included' => 'nullable',
                'tour.meals' => 'nullable',
                'tour.is_insurance_included' => 'nullable',
                'tour.insurance' => 'nullable',
                'tour.is_optional_included' => 'nullable',
                'tour.optional' => 'nullable',
                'tour.more_information' => 'nullable',
                'tour.destinations' => 'nullable',
                'tour.languages' => 'nullable',
                'tour.recomended' => 'nullable',
                'tour.free_cancelation' => 'nullable',
                'tour.deals_and_discount' => 'nullable',
                'tour.group_type' => 'nullable',
                'tour.duration' => 'nullable',
                  'tour.meta_title' => 'nullable',
                'tour.meta_description' => 'nullable',
    
            ];
        }
    }


      /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tour.tour_name.unique' => 'The tour name has already been taken.',
            'tour.tour_type' => 'The type type field is required',
            'tour.product_type' => 'The product type field is required',
            // 'tour.traveling_date_start' => 'The traveling date start field is required',
            // 'tour.traveling_date_end' => 'The traveling date end field is required',
            'tour.nights' => 'The nights  field is required',
            'tour.days' => 'The days field is required',
            'tour.tour_price' => 'The type price field is required',
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
