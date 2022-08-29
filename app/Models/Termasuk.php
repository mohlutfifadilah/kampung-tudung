<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termasuk extends Model
{
    use HasFactory;
    protected $table = 'termasuk';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_paket',
        'nama',
    ];
}
