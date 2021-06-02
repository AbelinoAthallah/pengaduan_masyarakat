<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPengaduan extends Model
{
    protected $table = "pengaduan";
    protected $primarykey = "id_pengaduan";
    public $timestamps=false;

    protected $fillable = [
        'id_pengaduan',
        'tgl_pengaduan',
        'nik',
        'isi_laporan',
        'foto',
        'status'
    ];
}
