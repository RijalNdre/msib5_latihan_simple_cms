<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritas = [
            [
                'user_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Berlari Dapat Menurunkan Berat Badan',
                'isi' => 'Berlari adalah salah satu olahraga yang paling efektif untuk menurunkan berat badan. 
                          Olahraga ini membakar banyak kalori dalam waktu singkat, dan juga dapat membantu meningkatkan metabolisme tubuh. 
                          Selain itu, berlari juga merupakan olahraga yang murah dan mudah dilakukan, sehingga dapat menjadi pilihan yang tepat 
                          bagi siapa saja yang ingin menurunkan berat badan. Berlari membakar kalori dengan cara meningkatkan detak jantung dan respirasi. 
                          Semakin tinggi detak jantung dan respirasi, semakin banyak kalori yang dibakar. Selain itu, berlari juga dapat membantu meningkatkan 
                          metabolisme tubuh, yaitu proses pembakaran kalori yang terjadi bahkan saat tubuh sedang dalam keadaan istirahat.',
                'tanggal_publikasi' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                ]
            ];
            DB::table('beritas')->insert($beritas);
    }
}
