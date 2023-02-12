<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\TypeUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = [
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Dokter'
            ],
            [
                'name' => 'Pasien'
            ],
        ];

        TypeUser::insert($type_user);
    }
}
