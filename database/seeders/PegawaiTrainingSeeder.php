<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiTrainingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pegawai_training')->updateOrInsert(
            ['pegawai_id' => 1, 'training_id' => 1],
            ['status' => 'Selesai']
        );

        DB::table('pegawai_training')->updateOrInsert(
            ['pegawai_id' => 2, 'training_id' => 2],
            ['status' => 'Mengikuti']
        );
    }
}