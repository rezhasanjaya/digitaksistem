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
        return view('karyawan.index');
    }

    public function tambah()
    {
        return view('karyawan.tambah');
    }
}
