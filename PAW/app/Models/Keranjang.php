<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import model User jika belum diimport

class Keranjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_barang',
        'name',
        'jenis_barang',
        'price',
        'amount',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Sesuaikan foreign key dengan 'user_id'
    }
}
