<?php

namespace App\Http\Requests\Admin\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'email' => 'required|email',
            'address' => 'required',
            'status' => 'required|in:A,D',
        ];
    }

    public function attributes(){
        return [
            'name' => 'username',
            'email' => 'email',
            'address' => 'alamat',
            'status' => 'status'
        ];
    }

    public function messages(){
        $required = ":attribute tidak boleh kosong!!";
        $error = "format :attribute salah!";

        return[
            '*.required' => $required,
            '*.alpha_num' => $error,
            '*.string' => $error,
            '*.email' => 'Format :attribute anda salah',
        ];
    }
}
