<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            //
            'name'=>'required|string',
            'email'=>'required|email',
            'subject' => 'required|string',
            'body' => 'required|string',
        ];
    }

    public function messages(){
        return[
            'name.required'=> 'Title is required!',
            'email.required'=>'Email is required',
            'subject.required'=>'Subject is required',
            'body.required'=>'Message is required',
        ];
    }
}
