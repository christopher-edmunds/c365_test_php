<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgeRequest extends FormRequest
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
            //Validate on name and date of birth
            'name'    => 'required|string',
            'date_of_birth' => 'date_format:"Y-m-d H:i"|required'
        ];
    }
}
