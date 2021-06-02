<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTanggapan extends Model
{
    protected $table = "tanggapan";
    protected $primarykey = "id_tanggapan";
    public $timestamps=false;

    protected $fillable = [
        'id_tanggapan',
        'id_pengaduan',
        'tgl_tanggapan',
        'tanggapan',
        'id_petugas'
    ];
}
