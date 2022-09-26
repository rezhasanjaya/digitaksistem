<?php

namespace App\Http\Controllers;

use App\Http\Requests\KaryawanStoreReq;
use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Department;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::latest()->paginate(20);
        return view('karyawan.index', ["title" => "Karyawan"], compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.tambah', [
            "title" => "Tambah Karyawan",
            'departments' => Department::all()
        ]);
    }

    public function edit(Karyawan $karyawan)
    {
        Department::first()->kode;
        return view('karyawan.edit', compact('karyawan'), ["title" => "Edit Data Karyawan"]);
    }

    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawans'));
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
        $karyawan = new Karyawan;
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->unit = $request->unit;
        $karyawan->tanggal_masuk = $request->tanggal_masuk;
        $karyawan->alamat = $request->alamat;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->agama = $request->agama;
        $karyawan->status_kawin = $request->status_kawin;
        $karyawan->goldar = $request->goldar;
        $karyawan->telp = $request->telp;
        $karyawan->save();

        // $department->create(array_merge($request->validated()));
        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan Baru Berhasil Ditambahkan.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect('/karyawan')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
