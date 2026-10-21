<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Loan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Dashboard SiPinjam', [
            'jumlahAlat'     => Item::count(),
            'jumlahKategori' => Category::count(),
            'sedangDipinjam' => Loan::where('status', 'dipinjam')->count(),
        ]);
    }
}