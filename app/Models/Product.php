<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $primaryKey = 'id';

    protected $fillable = [
        'kode',
        'id_merchant',
        'gambar',
        'judul',
        'deskripsi',
        'harga'
    ];
}
