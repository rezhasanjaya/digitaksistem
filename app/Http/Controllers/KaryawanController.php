<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;
use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index', ["title" => "Karyawan"]);
    }

    public function tambah()
    {
        return view('karyawan.tambah', ["title" => "Tambah Karyawan"]);
    }

    public function store(Request $request)
    {
        $request->validate([
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
        ]);

        Karyawan::tambah($request->all());

        return redirect()->route('department.index')
            ->with('success', 'Karyawan Baru Telah Ditambahkan.');
    }
}
