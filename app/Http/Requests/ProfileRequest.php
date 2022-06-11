<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name'=> 'required|max:255',
            'email' => 'required|email',
            'password' => 'max:255',
            'phone' => 'required|string|max:50',
            'message' => 'max:255',
            'address' => 'max:255',
            'contry' => 'max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
