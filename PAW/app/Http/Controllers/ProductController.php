<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Your code to show all categories
    }

    public function create()
    {
        // Your code to show the create form
    }

    public function store(Request $request)
    {
        // Your code to store a new in$product
    }

    public function show(Product $product)
    {
        // Your code to show a specific in$product
    }

    public function edit(Product $product)
    {
        // Your code to show the edit form
    }

    public function update(Request $request, Product $product)
    {
        // Your code to update a in$product
    }

    public function destroy(Product $product)
    {
        // Your code to delete a in$product
    }
}
