<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        // [
        //     'nama'          => 'Satriyo Agung Ramadhan',
        //     'alamat'        => 'Bogor',
        //     'created_at'    => Time::now(),
        //     'updated_at'    => Time::now(),
        // ],[
        //     'nama'          => 'Satriyo',
        //     'alamat'        => 'Jakarta',
        //     'created_at'    => Time::now(),
        //     'updated_at'    => Time::now(),
        // ],[
        //     'nama'          => 'Iyo',
        //     'alamat'        => 'Sukabumi',
        //     'created_at'    => Time::now(),
        //     'updated_at'    => Time::now(),
        // ],
        // ];


        // data baru
        $faker = \Faker\Factory::create('id_ID');
        for($i = 0; $i < 50; $i++) {
            $data = [
            'nama'          => $faker->name,
            'alamat'        => $faker->address,
            'created_at'    => Time::createFromTimestamp($faker->unixTime()),
            'updated_at'    => Time::now(),
            ];
            $this->db->table('orang')->insert($data);
        }


        // Simple Queries
        // $this->db->query('INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('orang')->insertBatch($data);
    }
}