<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerpusModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_buku";
    protected $primaryKey = "id_bk";
    protected $fillable = ["id_bk", "jd_bk", "penulis_bk", "penerbit_bk", "thn_bk", "jenis_bk", "gambar"];
}
