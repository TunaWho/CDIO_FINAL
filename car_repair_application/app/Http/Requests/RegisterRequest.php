<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

    public static $rules = [
        'name' => ['required', 'string', 'max:50'],
        'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return self::$rules;
    }
}
