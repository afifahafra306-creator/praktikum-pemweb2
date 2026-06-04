<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeeder extends Seeder
{
    public function run(): void
    {
        Training::updateOrCreate(
            ['nama_training' => 'Laravel Basic'],
            [
                'jenis_training_id' => 1,
                'penyelenggara' => 'Internal',
                'tanggal_training' => '2026-01-10',
                'lokasi' => 'Jakarta',
            ]
        );

        Training::updateOrCreate(
            ['nama_training' => 'Communication Skill'],
            [
                'jenis_training_id' => 2,
                'penyelenggara' => 'External',
                'tanggal_training' => '2026-02-15',
                'lokasi' => 'Bandung',
            ]
        );

        Training::updateOrCreate(
            ['nama_training' => 'Leadership Training'],
            [
                'jenis_training_id' => 3,
                'penyelenggara' => 'HR Consultant',
                'tanggal_training' => '2026-03-20',
                'lokasi' => 'Surabaya',
            ]
        );
    }
}