<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $table = 'merchant';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'username',
        'password',
        'id_produk',
        'foto',
        'deskripsi',
        'wa'
    ];
}
