<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Komik'
        ];

        // cara connect DB tanpa model
        $db = \Config\Database::connect();
        $komik = $db->query("SELECT * FROM komik");
        dd($komik);

        return view('komik/index', $data);
    }



    //--------------------------------------------------------------------

}
