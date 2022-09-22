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
                'id' => '1',
                'kode' => 'HRD',
                'department' => 'Human Resources Development'
            ]
        );
        DB::table('department')->insert(
            [
                'id' => '2',
                'kode' => 'KEU',
                'department' => 'Keuangan'
            ]
        );
        DB::table('department')->insert(
            [
                'id' => '3',
                'kode' => 'PRO',
                'department' => 'Produksi'
            ],
        );
    }
}
