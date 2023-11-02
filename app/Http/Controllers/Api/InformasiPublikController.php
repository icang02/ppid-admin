<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InformasiPublik;
use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function berkala()
    {
        return InformasiPublik::select('judul', 'isi')->find(1);
    }
    public function listBerkala()
    {
        $data =  InformasiPublik::find(1);
        return $data->list_informasi_publik()->get();
    }

    public function setiapSaat()
    {
        return InformasiPublik::select('judul', 'isi')->find(2);
    }

    public function listSetiapSaat()
    {
        $data =  InformasiPublik::find(2);
        return $data->list_informasi_publik()->get();
    }

    public function dikecualikan()
    {
        return InformasiPublik::select('judul', 'isi')->find(4);
    }
}
