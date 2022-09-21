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

    public function tambah()
    {
        return view('department.tambah', ["title" => "Tambah Department"]);
    }

    public function store(Department $department,  StoreDepartmentReq $request)
    {

        $department->create(array_merge($request->validated()));
        return redirect('/department')
            ->with('success', 'Tambah Unit Berhasil.');
    }

    public function edit(Department $departments)
    {
        return view('department.edit',  ["title" => "Edit Data Department"]);
    }

    public function update(Department $department, UpdateDepartmentReq $request)
    {
        $request->validate([
            'kode' => 'required',
            'department' => 'required',
        ]);

        $department->fill($request->post())->save();

        return redirect('/department')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect('/department')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
