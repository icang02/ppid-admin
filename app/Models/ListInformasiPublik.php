<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListInformasiPublik extends Model
{
    use HasFactory;

    protected $table = 'list_informasi_publik';
    public $timestamps = false;
    protected $guarded = [''];

    public function informasi_publik()
    {
        return $this->belongsTo(InformasiPublik::class);
    }
}
