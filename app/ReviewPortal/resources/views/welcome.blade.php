@extends("layouts.appi")
@include("layouts.na")
@section("content")
    <main class="flex-grow container mx-auto px-4">
        <div class="hero h-full flex flex-col justify-center items-center">
            <img src="{{asset("img/front.jpg")}}"
                 alt="Luxury Car Dealership"
                 class="hero-image rounded-lg shadow-xl">
            <h2 class="my-4 text-3xl font-bold text-gray-800">Discover Your Dream Car Today</h2>
            <a href="{{Route("dealerships")}}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 mb-8">
                Explore Inventory
            </a>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Premium Motors. All Rights Reserved.</p>
        </div>
    </footer>
@endsection
