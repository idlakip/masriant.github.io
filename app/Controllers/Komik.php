<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Komik'
        ];

        $komikModel = new \App\Models\KomikModel();

        return view('komik/index', $data);
    }



    //--------------------------------------------------------------------

}
