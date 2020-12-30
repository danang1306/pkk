<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required|string|alpha_num',
            'password' => 'required|string|alpha_num',
        ];
    }

    public function attributes(){
        return [
            'name' => 'username',
            'password' => 'password'
        ];
    }

    public function messages(){
        $required = ":attribute tidak boleh kosong!!";
        $error = "format :attribute salah!";

        return[
            '*.required' => $required,
            '*.alpha_num' => $error,
            '*.string' => $error,
        ];
    }
}
