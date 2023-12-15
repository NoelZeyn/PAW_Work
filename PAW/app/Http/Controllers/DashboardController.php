<?php
namespace App\Http\Controllers;
// DashboardController.php

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class DashboardController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('category_search')) {
            $searchTerm = $request->input('category_search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%$searchTerm%")
                  ->orWhere('description', 'like', "%$searchTerm%")
                  ->orWhereHas('category', function ($subq) use ($searchTerm) {
                      $subq->where('name', 'like', "%$searchTerm%");
                  });
            });
        }

        $products = $query->paginate(10);
        $categories = Category::all();

        return view('dashboard.index', compact('products', 'categories'));
    }
}
