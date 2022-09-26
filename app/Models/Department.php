<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Department extends Model
{

    public $timestamps = false;
    public $table = "department";
    use HasFactory;
    protected $fillable = [
        'kode',
        'department',
    ];

    public function getRouteKeyName()
    {
        return 'kode';
    }

    protected $primarykey = 'kode';
    protected $guarded = [
        'id',
    ];
}
