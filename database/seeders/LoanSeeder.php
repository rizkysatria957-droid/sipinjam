<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        // Mengambil semua user yang berperan sebagai mahasiswa
        $mahasiswa = User::where('role', 'mahasiswa')->get();

        // 5 mahasiswa acak, masing-masing meminjam 2 alat
        foreach ($mahasiswa->random(5) as $user) {
            $loan = $user->loans()->create([
                'loan_date' => now()->subDays(2),
                'due_date' => now()->addDay(),
                'status' => 'dipinjam',
                'notes' => 'Praktikum Elektronika Dasar',
            ]);

            // Ambil 2 alat acak yang stoknya masih tersedia
            $alat = Item::available()->inRandomOrder()->take(2)->get();

            foreach ($alat as $item) {
                // Simpan data ke tabel pivot loan_item
                $loan->items()->attach($item->id, ['qty' => 1]); 
                
                // Kurangi stok alat sebanyak 1
                $item->decrement('stock'); 
            }
        }
    }
}