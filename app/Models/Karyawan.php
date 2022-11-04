<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    public $table = "karyawan";
    public $timestamps = false;
    
    protected $fillable = [
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

    protected $guarded = [
        'id',
    ];
}
