<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $kategori = [
            [
                'name' => 'Alat Ukur', 
                'description' => 'Multimeter, osiloskop, jangka sorong'
            ],
            [
                'name' => 'Alat Solder', 
                'description' => 'Solder, penyedot timah, heat gun'
            ],
            [
                'name' => 'Mikrokontroler', 
                'description' => 'Arduino, ESP32, Raspberry Pi'
            ],
            [
                'name' => 'Perkakas', 
                'description' => 'Obeng, tang, kunci pas'
            ],
            [
                'name' => 'Alat K3', 
                'description' => 'helm, kacamata, sarung tangan'
            ], // Penambahan kategori baru
        ];

        foreach ($kategori as $data) {
            $category = Category::create($data);
            
            // Diubah menjadi 8 alat acak untuk setiap kategori
            Item::factory()->count(8)->create(['category_id' => $category->id]);
        }
    }
}