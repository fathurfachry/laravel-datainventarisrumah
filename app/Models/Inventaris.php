<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $fillable = [
        'nama_barang',
        'ruangan',
        'jumlah_barang',
        'info_barang'
    ];
}
