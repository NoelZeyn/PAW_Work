<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
