<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;
    public $table = "kontrak";
    public $timestamps = false;

    protected $fillable = [
        'karyawan_id',
        'status',
        'tgl_mulai',
        'durasi_kontrak',
        'dokumen',
    ];

    protected $guarded = [
        'id',
    ];
}
