<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
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
  }
}
