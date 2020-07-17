<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;


class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    $data = [
      'nama' => 'LAKIP',
      'alamat'    => 'Jl. Serdang Baru Raya No. 4B - Jakarta',
      'created_at' => Time::now(),
      'updated_at' => Time::now(),
    ];

    // Orang Queries
    $this->db->query(
      "INSERT INTO orang (nama, alamat,created_at,updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
      $data
    );

    // Using Query Builder
    // $this->db->table('users')->insert($data);
  }
}
