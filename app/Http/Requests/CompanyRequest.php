<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'website'=>'required|url'
        ];

    }
    public function messages(){
        return[
            'email.email'=>'The email you entered is not valid',
            '*.required'=>'The :attribute field cannot be empty'
        ];
    }
}
