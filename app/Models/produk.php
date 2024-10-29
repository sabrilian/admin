<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';

    protected $primaryKey = 'idproduk';
    protected $fillable = ['namaproduk', 'hargareseller', 'hargajual', 'gambar', 'deskripsi'];
}
