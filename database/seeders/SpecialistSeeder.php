<?php

namespace Database\Seeders;


use App\Models\MasterData\Specialist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialist = [
            [
                'name' => 'Dermatology',
                'price' => '250000',
            ],
            [
                'name' => 'Dentist',
                'price' => '250000',
            ],
            [
                'name' => 'Endodontics',
                'price' => '250000',
            ],
            [
                'name' => 'General Dentistry',
                'price' => '250000',
            ],
            [
                'name' => 'Oral and Maxillofacial Surgery',
                'price' => '250000',
            ],
            [
                'name' => 'Orthodontics',
                'price' => '250000',
            ],
            [
                'name' => 'Pedeiatric Dentistry',
                'price' => '250000',
            ],
            [
                'name' => 'Periodontics',
                'price' => '250000',
            ],
            [
                'name' => 'Prosthodontics',
                'price' => '250000',
            ],
            [
                'name' => 'Radiology',
                'price' => '250000',
            ],
            [
                'name' => 'Surgery',
                'price' => '250000',
            ], [
                'name' => 'Urology',
                'price' => '250000',
            ],
        ];
        Specialist::insert($specialist);
    }
}
