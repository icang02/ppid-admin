<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanGambar extends Model
{
    use HasFactory;

    protected $table = 'laporan_gambar';
    public $timestamps = false;
    protected $guarded = [''];
}
