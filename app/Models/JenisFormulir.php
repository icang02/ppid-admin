<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisFormulir extends Model
{
    use HasFactory;

    protected $table = 'jenis_formulir';
    public $timestamps = false;
    protected $guarded = [''];
}
