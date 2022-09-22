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

    public function tambah()
    {
        return view('karyawan.tambah', [
            "title" => "Tambah Karyawan",
            'departments' => Department::all()
        ]);
    }

    public function store(Karyawan $karyawan,  KaryawanStoreReq $request)
    {
        $karyawan->create(array_merge($request->validated()));
        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan Baru Telah Ditambahkan.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect('/karyawan')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
