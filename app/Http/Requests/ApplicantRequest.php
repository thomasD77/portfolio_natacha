<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
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
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|string',
            'start_date' =>'required|date',
            'birthdate' => "required|date",
            'remarque' => 'required|string',
            'job' => 'required|string',
            'file' => 'required|mimes:pdf',

        ];
    }

    public function messages(){
        return[
            'first_name.required'=> 'First Name is required',
            'last_name.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'start_date.required' => 'Start date is required',
            'birthdate.required' => 'Birthdate is required',
            'remarque.required' => 'Remarque is required',
            'job.required' => 'Job function is required',
            'file.required' => 'CV is required, must be a PDF-File',
        ];
    }
}
