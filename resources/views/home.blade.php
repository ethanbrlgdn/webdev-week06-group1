@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h2>Welcome to Our Laravel Website</h2>

    <p>
        Welcome to our Week 06 Laravel assessment website.
        This page demonstrates routing, Blade layouts, reusable components,
        and Blade directives.
    </p>

    <x-alert>
    Welcome! You are currently viewing the Home page.
</x-alert>

    <h3>What We Demonstrate</h3>

    @if(count($features) > 0)

        <ul>
            @foreach($features as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        </ul>

    @else

        <p>No features are currently available.</p>

    @endif

@endsection