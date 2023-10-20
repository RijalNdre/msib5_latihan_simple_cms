<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [
            [
                'nama_kategori' => 'Olahraga'
            ],
            [
                'nama_kategori' => 'Politik'
            ],
            [
                'nama_kategori' => 'Game dan Hiburan'
            ],
            [
                'nama_kategori' => 'Otomotif'
            ],
            [
                'nama_kategori' => 'Kesehatan'
            ],
        ];

        DB::table('kategoris')->insert($kategoris);
    }
}
