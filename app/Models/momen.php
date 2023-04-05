<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class momen extends Model
{
    protected $table = "momen";
    protected $primaryKey = "id";
    protected $fillable  = [
        'tanggal', 'judul', 'message', 'gambar'
    ];
}
