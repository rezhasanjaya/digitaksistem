<?php

namespace App\Models;
// tes 123
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nik',
        'nama',
        'jenis_kelamin',
        'unit',
        'tanggal_masuk',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'jabatan',
        'agama',
        'status_kawin',
        'goldar',
        'telp',
    ];
}
