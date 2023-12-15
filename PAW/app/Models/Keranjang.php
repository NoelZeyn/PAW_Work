<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(User::class);
    }
}