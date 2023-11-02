<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function permohonan()
    {
        return Formulir::select('judul', 'isi', 'link')->where('jenis_formulir', 'permohonan')->first();
    }

    public function keberatan()
    {
        return Formulir::select('judul', 'isi', 'link')->where('jenis_formulir', 'keberatan')->first();
    }

    public function sengketa()
    {
        return Formulir::select('judul', 'isi', 'link')->where('jenis_formulir', 'sengketa')->first();
    }
}
