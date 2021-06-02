<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPetugas extends Model
{
    protected $table = "petugas";
    protected $primarykey = "id_petugas";
    public $timestamps=false;

    protected $fillable = [
        'id_petugas',
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level'
    ];
}
