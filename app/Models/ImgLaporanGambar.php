<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgLaporanGambar extends Model
{
    use HasFactory;

    protected $table = 'img_laporan_gambar';
    public $timestamps = false;
    protected $guarded = [''];
}
