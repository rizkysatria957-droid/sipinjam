<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            [
                'nama_ruangan' => 'Lab Komputer A',
                'kapasitas' => 40
            ],
            [
                'nama_ruangan' => 'Lab Jaringan',
                'kapasitas' => 40
            ],
        ];

        foreach ($rooms as $data) {
            $room = rooms::create($data);
        }
    }
}