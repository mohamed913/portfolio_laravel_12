<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
 * Get the validation rules that apply to the request.
 *
 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
 */
public function rules(): array
{
    return [
        'name'       => 'required|max:255',
       'email'       => 'required|email|max:255',
       'message'       => 'required|max:1000',
      
    ];
}

/**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'name.required' => 'The name record is required',
        'name.max' => 'The name record max is : 255 characters',
  
        'email.required' => 'The email record is required',
        'email.max' => 'The email record max is : 255 characters',
        'email.email' => 'Please insert a vaild email',

        'message.required' => 'The message record is required',
        'message.max' => 'The message record max is : 1000 characters',
    ];
}

}
