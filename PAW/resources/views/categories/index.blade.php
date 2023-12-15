<!-- resources/views/categories/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <h1>Categories</h1>

    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
@endsection
