<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'email' => 'bail|email|max:255|unique:users,email,'. request()->id.',id',
            'username' => 'bail|required|max:255|unique:users,username,'. request()->id.',id',
            'phone' => 'required|max:255',
            'province_id' => 'required|max:255',
            'district_id' => 'required|max:255',
        ];
    }
}