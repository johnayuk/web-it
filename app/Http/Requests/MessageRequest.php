<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'email'=>'required',
            'name'=>'required',
            'interest'=>'required',
            'phone'=>'required',

        ];
    }


    public function messages()
    {
       return[
        'email.required'=>'Email is required',
        'phone.required'=>'Phone is required',
        'interest.required'=>'Interest in is required',
        'name.required'=>'Name is required',
       ];
    }
}
