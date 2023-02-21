<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pengaduan',
        'tanggal_tanggapan',
        'tanggapan',
        'id_user'
    ];
}
