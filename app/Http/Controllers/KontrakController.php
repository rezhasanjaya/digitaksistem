<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class KontrakController extends Controller
{
    public function index()
    {
        $data = Kontrak::join("karyawan", function ($join) {
            $join->on("karyawan.id", "=", "kontrak.karyawan_id");
        })->get();
        //$kontraks = Kontrak::latest()->paginate(20);
        return view('kontrak.index', [
            "title" => "Kontrak Kerja",
            'karyawan' => Karyawan::all(),
            'kontrak' => Kontrak::all(),
            'data' => $data,
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
            'karyawan_id'  => 'required',
            'status' => 'required',
            'tgl_mulai' => 'required',
            'durasi_kontrak' => 'required|numeric',
        ]);
        $kontrak = new Kontrak;
        $kontrak->karyawan_id = $request->karyawan_id;
        $kontrak->status = $request->status;
        $kontrak->tgl_mulai = $request->tgl_mulai;
        $kontrak->durasi_kontrak = $request->durasi_kontrak;
        $kontrak->dokumen = $request->dokumen;
        $perhitunganAkhirKontrak = (new Carbon($request->tgl_mulai))->addMonths($request->durasi_kontrak);
        $kontrak->tgl_selesai = $perhitunganAkhirKontrak;
        $kontrak->save();
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
