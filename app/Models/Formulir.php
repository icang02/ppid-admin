<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $table = 'formulir';
    public $timestamps = false;
    protected $guarded = [''];
}
