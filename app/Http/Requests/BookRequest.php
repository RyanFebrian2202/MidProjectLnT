<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'judul' => ['required','min:5', 'max:20'],
            'penulis' => ['required','string','min:5','max:20'],
            'jumlah_halaman' => ['required','min:1','numeric'],
            'tahun_terbit' => ['required','min:2000','max:2021','numeric'],
        ];
    }

    public function messages()
    {
        return[
            'judul.required' => 'Judul harus diisi',
            'judul.min' => 'Panjang judul harus diantara 5-20 huruf',
            'judul.max' => 'Panjang judul harus diantara 5-20 huruf',
            'penulis.required' => 'Nama penulis harus diisi',
            'penulis.min' => 'Nama penulis harus diantara 5-20 huruf',
            'penulis.max' => 'Nama penulis harus diantara 5-20 huruf',
            'jumlah_halaman.required' => 'Jumlah halaman harus diisi',
            'jumlah_halaman.min' => 'Jumlah halaman minimal 1',
            'jumlah_halaman.numeric' => 'Jumlah halaman harus diisi dengan angka',
            'tahun_terbit.required' => 'Tahun terbit harus diisi',
            'tahun_terbit.min' => 'Tahun terbit harus diantara 2000-2021',
            'tahun_terbit.max' => 'Tahun terbit harus diantara 2000-2021',
            'tahun_terbit.numeric' => 'Tahun terbit harus diisi dengan angka',
        ];
    }
}
