<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('dashboard.index', compact('products'));
    }
    
}
