<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembershipFormRequest extends FormRequest
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
        $rules = [
            'name' => ['required', 'string', 'max:100'],
            'contact' => ['required', 'max:20'],
            'email' => [
                'required',
            ],
            'copy_of_IC' => [
                'required',
                'max:10000',
                'image'
            ],
            'package' => [
                'required',
            ],
        ];

        return $rules;
    }
}
