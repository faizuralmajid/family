<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    protected $table = 'pays';
    protected $fillable = [
        'no_pembelian',
        'no_rekening',
        'id_user',
        'typesubscribe',
        'durasi',
        'total_bayar',
        'status',
        'path'
    ];
}
