<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang';

    protected $fillable = [
        'nama_barang',
        'kategori_barang',
        'jenis_barang',
        'price',
        'amount',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}