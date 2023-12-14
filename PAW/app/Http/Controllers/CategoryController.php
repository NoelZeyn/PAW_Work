<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        // Your code to store a new category
    }

    public function show(Category $category)
    {
        // Your code to show a specific category
    }

    public function edit(Category $category)
    {
        // Your code to show the edit form
    }

    public function update(Request $request, Category $category)
    {
        // Your code to update a category
    }

    public function destroy(Category $category)
    {
        // Your code to delete a category
    }
}
