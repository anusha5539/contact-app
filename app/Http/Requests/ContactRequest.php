<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\Mime\Email;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'=>'required|max:20',
            'last_name'=>'required|max:20',
            'email'=>'required|email',
            'phone'=>'required|min:10|max:10',
            'address'=>'required', 
            'company_id'=>'required|exists:companies,id'
            //
        ];

    }

    public function attributes(){
        return[
            'company_id'=>'company',
        ];
    }

    public function messages(){
        return[
            'email.email'=>"The email must be in proper format",
            '*.required'=>"The :attribute field cannot be empty",

        ];
    }
}
