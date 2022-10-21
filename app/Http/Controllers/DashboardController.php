<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
      return view('dashboard');
    }

    public function count_karyawan()
    {
      $this->db->select('*');
      $this->db->from('tb_obat');
      echo $this->db->count_all_results();
    }
}
