<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSearcherRequest extends FormRequest
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
            "profilelink" => "required",
            "avatar" => "required",
            "game_id" => "required",
            "goal" => "required",
            "server" => "required",
            "gender" => "required",
            "last_online" => "required",
        ];
    }
}
