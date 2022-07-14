<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    use HasFactory;

    protected $table = 'pesan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'nohp',
        'tanggal',
        'paket',
        'jumlah-orang',
        'catatan',
        'total',
        'evidence',
        'status',
    ];
}
