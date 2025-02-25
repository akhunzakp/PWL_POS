<?php

namespace Database\Seeders;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KategoriSeeder extends Seeder
{
    /**
     * Run the migrations.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' =>'DRK', 'kategori_nama' => 'Drink'],
            ['kategori_id' => 2, 'kategori_kode' =>'FOD', 'kategori_nama' => 'Food'],
            ['kategori_id' => 3, 'kategori_kode' =>'HLT', 'kategori_nama' => 'Health'],
            ['kategori_id' => 4, 'kategori_kode' =>'SKC', 'kategori_nama' => 'SkinCare'],
            ['kategori_id' => 5, 'kategori_kode' =>'ELC', 'kategori_nama' => 'Electronic'],
        ];
        DB::table('m_kategori') ->insert($data);
    }
};