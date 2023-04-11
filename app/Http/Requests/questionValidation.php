<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class questionValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'question'=>['String'] 
        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'question is required!'
        ];
    }
}
