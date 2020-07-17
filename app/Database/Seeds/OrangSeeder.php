<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;


class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    // $data = [
    //   [
    //     'nama' => 'Masrianto SAB',
    //     'alamat'    => 'Jl. Serdang Baru Raya No. 4B - Bandung',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now(),
    //   ],
    //   [
    //     'nama' => 'Hasan',
    //     'alamat'    => 'Jl. Taruna Jaya No. 44 - Solo',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now(),
    //   ],
    //   [
    //     'nama' => 'Zainal',
    //     'alamat'    => 'Jl. Serdang Baru IX No. 4B - Makassar',
    //     'created_at' => Time::now(),
    //     'updated_at' => Time::now(),
    //   ]
    // ];

    // coba faker
    $faker = \Faker\Factory::create('id_ID');
    // generate data by accessing properties
    // echo $faker->name;
    $data = [
      'nama'        => $faker->name,
      'alamat'      => $faker->address,
      'created_at'  => Time::createFromTimestamp($faker->unixTime()),
      'updated_at'  => Time::now(),
    ];



    // Simple Queries
    // $this->db->query(
    //   "INSERT INTO orang (nama, alamat,created_at,updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
    //   $data
    // );

    // Using Query Builder
    $this->db->table('orang')->insert($data);
    // $this->db->table('orang')->insertBatch($data);
  }
}
