<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = [
        'id_jenis',
        'nama',
        'keterangan',
        'fisik',             
    ];

    public function jenis_barang()
    {
        return $this->belongsTo(JenisBarang::class);
    }
}
