<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelMasyarakat extends Model
{
    protected $table = "masyarakat";
    protected $primarykey = "nik";
    public $timestamps=false;

    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp'
    ];
}
