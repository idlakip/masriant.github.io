<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Komik'
        ];

        $komikModel = new KomikModel();

        return view('komik/index', $data);
    }



    //--------------------------------------------------------------------

}
