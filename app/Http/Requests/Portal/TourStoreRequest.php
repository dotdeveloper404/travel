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
            'tour.traveling_date_start' => 'The traveling date start field is required',
            'tour.traveling_date_end' => 'The traveling date end field is required',
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
