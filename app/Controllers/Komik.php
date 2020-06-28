<?php

namespace App\Controllers;

use App\Models\KomikModel;
use CodeIgniter\Validation\Rules;

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

        // Jika data tidak ada ditabel
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
        }
        return view('komik/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('komik/create', $data);
    }

    public function search()
    {
        $data = [
            'title' => 'Form search data',
            'komik' => $this->komikModel->getKomik()
        ];

        return view('komik/search', $data);
    }

    public function save()
    {
        // validasi input 
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'penulis' => [
                'rules' => 'required|is_unique[komik.penulis]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required|is_unique[komik.penerbit]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ]




        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/komik');
    }
}
