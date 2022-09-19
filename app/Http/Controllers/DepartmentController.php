<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('department.index');
    }

    public function tambah()
    {
        return view('department.tambah');
    }
}
