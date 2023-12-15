<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $fillable = ['product_id', 'quantity', 'user_id'];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
