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

    public function edit(Department $departments)
    {
        return view('department.edit', compact('departments'), ["title" => "Edit Data Department"]);
    }

    public function update(Department $department, UpdateDepartmentReq $request)
    {
        $request->validate([
            'kode'  => 'required|unique:department|min:1|max:3',
            'department' => 'required',
        ]);
        $department = new Department;
        $department->kode = $request->kode;
        $department->department = $request->department;
        $department->save();
        //$department->fill($request->post())->save();
        return redirect()->route('department.index')
            ->with('sukses', 'Company Has Been updated successfully');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect('/department')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
