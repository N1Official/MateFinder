<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "id" => "required",
            "username" => "required",
            "firstName" => "required",
            "lastName" => "required",
            "email" => "required",
            "phone" => "required",
            "password" => "required",
            "country" => "required",
            "state" => "required",
            "city" => "required",
            "zipcode" => "required",
            "address" => "required",
        ];
    }
}
