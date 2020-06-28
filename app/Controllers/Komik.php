<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];


        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        // Jika komik tidak ada ditabel
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik' . $slug . 'tidak ada dalam database kami.');
        }
        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah data'
        ];

        return view('komik/create', $data);
    }

    public function save()
    {
        dd($this->request->getVar());

        return view('komik/index');
    }
}
