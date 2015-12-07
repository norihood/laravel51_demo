<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class registerForm extends Request
{
    protected $rules = [
        'username' => 'required',
        'password' => 'required|between:3,10',
        're-password' => 'required|same:password',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required'
    ];
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
        $rules = $this->rules;

        if ($this->path() == 'dang-nhap')
        {
            $rules['password'] = 'min:8';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'username.required' => 'nhap :attribute vao may',
        ];
    }


}
