<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department')->insert(
            [
                'kode' => 'HRD',
                'department' => 'Human Resources Development'
            ]
        );
        DB::table('department')->insert(
            [
                'kode' => 'KEU',
                'department' => 'Keuangan'
            ]
        );
        DB::table('department')->insert(
            [
                'kode' => 'PRO',
                'department' => 'Produksi'
            ],
        );
    }
}
