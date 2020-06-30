<?php

namespace App\Controllers;

use App\Models\DatabaseModel;
use CodeIgniter\Validation\Rules;

class Database extends BaseController
{
    protected $databaseModel;
    public function __construct()
    {
        $this->databaseModel = new DatabaseModel();
    }
    public function index()
    {
        // $database = $this->databaseModel->findAll();

        $data = [
            'title' => 'Daftar Database',
            'database' => $this->databaseModel->getDatabase()
        ];


        return view('database/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Database',
            'database' => $this->databaseModel->getDatabase($slug)
        ];

        // Jika data tidak ada ditabel
        if (empty($data['database'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang anda cari adalah :  '  . $slug .  ' dan tidak ada dalam database kami.');
        }
        return view('database/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('database/create', $data);
    }

    public function search()
    {
        $data = [
            'title' => 'Form search data',
            'database' => $this->databaseModel->getDatabase()
        ];

        return view('database/search', $data);
    }

    public function save()
    {
        // validasi input 
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[database.judul]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'penulis' => [
                'rules' => 'required|is_unique[database.penulis]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required|is_unique[database.penerbit]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ]




        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/database/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->databaseModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/database');
    }
}
