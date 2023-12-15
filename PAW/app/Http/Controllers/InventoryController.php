<?php
// app/Http/Controllers/InventoryController.php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\Product;

class InventoryController extends Controller
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
        // Your code to store a new in$inventory
    }

    public function show(Inventory $inventory)
    {
        // Your code to show a specific in$inventory
    }

    public function edit(Inventory $inventory)
    {
        // Your code to show the edit form
    }

    public function update(Request $request, Inventory $inventory)
    {
        // Your code to update a in$inventory
    }

    public function destroy(Inventory $inventory)
    {
        // Your code to delete a in$inventory
    }
    public function add(Product $product)
    {
        //ATURIN
        return redirect()->back()->with('success', 'Product added to inventory successfully.');
    }
}
