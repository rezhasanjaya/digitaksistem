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
        return view('department.index', compact('departments'));
    }

    public function tambah()
    {
        return view('department.tambah');
    }

    public function store(Department $department,  StoreDepartmentReq $request)
    {
        $department->create(array_merge($request->validated()));
        return redirect('/department')
            ->with('success', 'Add Unit Success.');
    }

    public function edit(Department $department)
    {
        return view('department.edit');
    }

    public function update(Department $department, UpdateDepartmentReq $request)
    {
        $department->update(array_merge($request->validated()));
        return redirect('/department')
            ->with('success', 'Edit Data Success');
    }
}
