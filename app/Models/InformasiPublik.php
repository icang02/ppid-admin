<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPublik extends Model
{
    use HasFactory;

    protected $table = 'informasi_publik';
    public $timestamps = false;
    protected $guarded = [''];

    public function list_informasi_publik()
    {
        return $this->hasMany(ListInformasiPublik::class);
    }
}
