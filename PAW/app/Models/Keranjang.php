<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id'; // Sesuaikan dengan nama kolom yang menjadi primary key
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'category_id',
        'amount'
    ];

    // Relasi ke tabel Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Relasi ke tabel Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
