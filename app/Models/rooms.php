<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
 // Kolom yang boleh diisi lewat create() dan update()
 protected $fillable = ['nama_ruangan', 'kapasitas'];

}
