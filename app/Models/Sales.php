<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'username',        
        'password',
        'hak_akses',
    ];

    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }
}
