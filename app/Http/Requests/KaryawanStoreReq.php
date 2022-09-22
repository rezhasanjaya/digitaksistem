<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanStoreReq extends FormRequest
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
            'nik' => 'required|unique:karyawan',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'unit' => 'required',
            'tanggal_masuk' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jabatan' => 'required',
            'agama' => 'required',
            'status_kawin' => 'required',
            'goldar' => 'required',
            'telp' => 'required',
        ];
    }
}
