<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        // Your code to store a new in$user
    }

    public function show(User $user)
    {
        // Your code to show a specific in$user
    }

    public function edit(User $user)
    {
        // Your code to show the edit form
    }

    public function update(Request $request, User $user)
    {
        // Your code to update a in$user
    }

    public function destroy(User $user)
    {
        // Your code to delete a in$user
    }
}
