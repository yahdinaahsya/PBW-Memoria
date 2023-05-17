<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Momen extends Model
{
    protected $table = "momens";
    protected $primaryKey = "id";
    protected $fillable  = [
        'user_id',
        'tanggal',
        'judul', 
        'message', 
        'gambar'
    ];
}
