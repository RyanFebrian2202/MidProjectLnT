<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'name'=>['required','string','min:1','max:100'],
            'email'=>['required','email'],
            'subject'=>['required','string','min:1','max:100'],
            'message'=>['required','string','min:1','max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi',
            'name.min' => 'Panjang nama harus diantara 1-100 huruf',
            'name.max' => 'Panjang nama harus diantara 1-100 huruf',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus diisi dengan format email (@.com)',
            'subject.required' => 'Subject harus diisi',
            'subject.min' => 'Panjang subject harus diantara 1-100 huruf',
            'subject.max' => 'Panjang subject harus diantara 1-100 huruf',
            'message.required' => 'Pesan/Keluhan harus diisi',
            'message.min' => 'Panjang pesan/keluhan harus diantara 1-255 huruf',
            'message.max' => 'Panjang pesan/keluhan harus diantara 1-255 huruf',
        ];
    }
}
