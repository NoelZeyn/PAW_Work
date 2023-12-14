<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
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
        // Your code to store a new in$review
    }

    public function show(Review $review)
    {
        // Your code to show a specific in$review
    }

    public function edit(Review $review)
    {
        // Your code to show the edit form
    }

    public function update(Request $request, Review $review)
    {
        // Your code to update a in$review
    }

    public function destroy(Review $review)
    {
        // Your code to delete a in$review
    }
}
