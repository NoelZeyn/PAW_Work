<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
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
        // Your code to store a new in$Order
    }

    public function show(Order $order)
    {
        // Your code to show a specific in$Order
    }

    public function edit(Order $order)
    {
        // Your code to show the edit form
    }

    public function update(Request $request, Order $order)
    {
        // Your code to update a in$Order
    }

    public function destroy(Order $order)
    {
        // Your code to delete a in$Order
    }
}
