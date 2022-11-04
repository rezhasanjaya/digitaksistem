<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentReq;
use App\Http\Requests\UpdateDepartmentReq;
use App\Http\Requests\UpdateJenisRequest;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {

        $departments = Department::latest()->paginate(20);
        return view('department.index', ["title" => "Departmen/Unit"], compact('departments'));
    }

    public function show(Department $departments)
    {
        return view('department.show', compact('departments'));
    }

    public function create()
    {
        return view('department.tambah', ["title" => "Tambah Department"]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode'  => 'required|unique:department|min:1|max:3',
            'department' => 'required',
        ]);
        $department = new Department;
        $department->kode = $request->kode;
        $department->department = $request->department;
        $department->save();

        // $department->create(array_merge($request->validated()));
        return redirect()->route('department.index')
            ->with('success', 'Tambah Unit Berhasil.');
    }

    public function edit(Department $department)
    {
        return view('department.edit', compact('department'), ["title" => "Edit Data Department"]);
    }


    public function update(Request $request, Department $department)
    {
        $request->validate([
            'kode'  => 'required|min:1|max:3',
            'department' => 'required',
        ]);
        // $department = Department::find($id);
        // $department->kode = $request->kode;
        // $department->department = $request->department;
        // $department->update();

        $department->update($request->all());
        return redirect()->route('department.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect('/department')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
