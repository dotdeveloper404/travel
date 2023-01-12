<?php

namespace App\Http\Requests\Portal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AgentStoreRequest extends FormRequest
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
        // $method = $this->route()->getActionMethod();

        if ($this->isMethod('post')) {
            return [
                'agent.name' => ['required', 'string'],
                'agent.email' => ['required', 'string'],
                'agent.password' => ['required', 'string'],
              
            ];
        }
    
        if ($this->isMethod('put')) {
            return [
                'agent.name' => ['required', 'string'],
                'agent.email' => ['required', 'string'],
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
           'name' =>'Name field is required',
           'email' =>'Email field is required',
           'password' =>'Password field is required',
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
