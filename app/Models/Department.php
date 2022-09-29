<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Department extends Model
{

    protected $primaryKey = "kode";
    public $incrementing = false;
    protected $keyType = 'string';

    public $table = "department";
    public $timestamps = false;


    use HasFactory;
    protected $fillable = [
        'kode',
        'department',
    ];

    public function getRouteKeyName()
    {
        return "kode";
    }
}
