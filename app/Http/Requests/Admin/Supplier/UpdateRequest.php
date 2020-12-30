<?php

namespace App\Http\Requests\Admin\Supplier;

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
            'company_name' => 'required|string',
            'email' => 'required|email',
            'no_telp' => 'required|numeric',
        ];
    }

    public function attributes(){
        return [
            'company_name' => 'Company Name',
            'email' => 'Email',
            'no_telp' => 'Telphone Number'
        ];
    }

    public function messages(){
        $required = ":attribute tidak boleh kosong!!";
        $error = "format :attribute salah!";

        return[
            '*.required' => $required,
            '*.string' => $error,
            '*.email' => 'Format :attribute anda salah',
            '*.numeric' => 'Format :attribute anda salah',
        ];
    }
}
