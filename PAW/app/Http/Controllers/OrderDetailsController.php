<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
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
        // Your code to store a new in$ord
    }

    public function show(OrderDetails $ord)
    {
        // Your code to show a specific in$ord
    }

    public function edit(OrderDetails $ord)
    {
        // Your code to show the edit form
    }

    public function update(Request $request, OrderDetails $ord)
    {
        // Your code to update a in$ord
    }

    public function destroy(OrderDetails $ord)
    {
        // Your code to delete a in$ord
    }
}
