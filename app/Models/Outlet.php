<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = "outlet";
    protected $fillable = [
        'id_bts',
        'nama',              
    ];

    public function bts()
    {
        return $this->belongsTo(Bts::class);
    }
}
