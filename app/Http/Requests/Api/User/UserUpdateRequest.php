<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'first_name' => 'string|between:2,30',
            'last_name' => 'string|between:2,30',
            'birthday' => 'date_format:Y-m-d|before:' . now(),
            'password' => 'string|between:6,30|confirmed',
            'email' => 'email|unique:users,email',
            'phone' => 'string|max:30|unique:users,phone'
        ];
    }
}
