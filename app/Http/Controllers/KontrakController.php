<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\Kontrak;

class KontrakController extends Controller
{
    public function index()
    {

        //$kontraks = Kontrak::latest()->paginate(20);
        return view('kontrak.index', [
            "title" => "Kontrak Kerja",
            'karyawan' => Karyawan::all()
        ]);
    }

    public function show()
    {
        return view('kontrak.show', compact('kontrak'));
    }

    public function create()
    {
        return view('kontrak.tambah', ["title" => "Tambah Kontrak"]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode'  => 'required|unique:department|min:1|max:3',
            'department' => 'required',
        ]);
        $kontrak = new Kontrak;
        $kontrak->karyawan_id = $request->karyawan_id;
        $kontrak->status = $request->status;
        $kontrak->tgl_mulai = $request->tgl_mulai;
        $kontrak->durasi_kontrak = $request->durasi_kontrak;
        $kontrak->dokumen = $request->dokumen;
        $kontrak->save();

        // $department->create(array_merge($request->validated()));
        return redirect()->route('kontrak.index')
            ->with('success', 'Tambah Kontrak Berhasil.');
    }

    public function edit(Kontrak $kontrak)
    {
        return view('kontrak.edit', compact('kontrak'), ["title" => "Edit Kontrak"]);
    }


    // public function update(Request $request, Department $department)
    // {
    //     $request->validate([
    //         'kode'  => 'required|min:1|max:3',
    //         'department' => 'required',
    //     ]);
    //     // $department = Department::find($id);
    //     // $department->kode = $request->kode;
    //     // $department->department = $request->department;
    //     // $department->update();

    //     $department->update($request->all());
    //     return redirect()->route('department.index')
    //         ->with('sukses', 'Data Berhasil Diupdate');
    // }

    public function destroy(Kontrak $kontrak)
    {
        $kontrak->delete();
        return redirect('/kontrak')
            ->with('success', 'Data Kontrak Berhasil Dihapus');
    }
}
