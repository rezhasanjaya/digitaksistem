<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
use App\Models\Karyawan;
use App\Models\Kontrak;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'username' => 'mainadmin',
      'name' => 'admin',
      'email' => 'admin@gmail.com',
      'password' => Hash::make('Digitak123*'),
      'role' => 1,
      'remember_token' => Str::random(10),

    ]);

    User::factory(3)->create();

    Department::create([
      'kode' => 'HRD',
      'department' => 'Human Resources Development'
    ]);

    Department::create([
      'kode' => 'KEU',
      'department' => 'Keuangan'
    ]);

    Department::create([
      'kode' => 'PRO',
      'department' => 'Produksi'
    ]);

    Karyawan::create([
      'nik' => '10119253',
      'nama' => 'Mochamad Adi Maulia Rachman',
      'jenis_kelamin' => 'Laki - Laki',
      'unit' => 'HRD',
      'tanggal_masuk' => '2022-10-10',
      'alamat' => 'Bandung',
      'tempat_lahir' => 'Bandung',
      'tanggal_lahir' => '1995-10-10',
      'jabatan' => 'Manager',
      'agama' => 'Islam',
      'status_kawin' => 'Belum Menikah',
      'goldar' => 'B-',
      'telp' => '08123456789'
    ]);

    Karyawan::create([
      'nik' => '10119281',
      'nama' => 'Rezha Satria Sanjaya Putra',
      'jenis_kelamin' => 'Laki - Laki',
      'unit' => 'HRD',
      'tanggal_masuk' => '2022-10-11',
      'alamat' => 'Jakarta',
      'tempat_lahir' => 'Jakarta',
      'tanggal_lahir' => '1996-10-10',
      'jabatan' => 'Operator',
      'agama' => 'Kristen',
      'status_kawin' => 'Belum Menikah',
      'goldar' => 'A-',
      'telp' => '08123456788'
    ]);

    Kontrak::create([
      'karyawan_id' => '1',
      'status' => 'Magang',
      'tgl_mulai' => '2022-11-01',
      'tgl_selesai' => '2023-01-01',
      'durasi_kontrak' => '2',
      'dokumen' => 'cv_adi.pdf'
    ]);

    Kontrak::create([
      'karyawan_id' => '2',
      'status' => 'Magang',
      'tgl_mulai' => '2022-11-01',
      'tgl_selesai' => '2023-01-01',
      'durasi_kontrak' => '2',
      'dokumen' => 'cv_reza.pdf'
    ]);
  }
}
