<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind + App Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .hero-image {
            height: calc(100vh - 200px);
            object-fit: cover;
            width: 100%;
        }

        @media (max-width: 1024px) {
            .hero-image {
                height: calc(100vh - 250px);
            }
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex flex-col">

{{-- Navbar --}}
@include('layouts.na')

{{-- Optional Page Header --}}
@isset($header)
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
@endisset

{{-- Page Content --}}
<main class="flex-grow container mx-auto px-2">
    {{ $slot }}
</main>

{{-- Footer --}}
<footer class="bg-gray-900 text-white py-4">
    <div class="container mx-auto px-4 text-center">
        <p>&copy; {{ now()->year }} {{ config('app.name', 'Laravel') }}. All Rights Reserved.</p>
    </div>
</footer>

{{-- Mobile menu toggle script (if needed in your nav) --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>
</body>
</html>
