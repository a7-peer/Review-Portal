@extends("layouts.appi")
@include("layouts.na")

@section("content")
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6 max-w-4xl mx-auto">
            <!-- Dealership Info -->
            <div class="text-center mb-8">
                <h1 id="dealerName" class="text-3xl font-bold text-gray-800 mb-2">{{ $dealership->name }}</h1>
                <p id="dealerLocation" class="text-gray-600"></p>
            </div>

            @auth
                <!-- Write a Review -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Write a Review</h2>
                    <form action="{{ route('review.store', $dealership->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="dealership_id" value="{{ $dealership->id }}">

                        <div class="mb-4">
                            <label for="purchaseDate" class="block text-gray-700 font-medium mb-2">Purchase Date</label>
                            <input type="date" id="purchaseDate" name="purchase_date"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label for="carMake" class="block text-gray-700 font-medium mb-2">Car Make</label>
                            <select id="carMake" name="car_make_id"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                                <option value="">Select Make</option>
                                @foreach($carMakes as $make)
                                    <option value="{{ $make->id }}">{{ $make->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="carYear" class="block text-gray-700 font-medium mb-2">Car Year</label>
                            <input type="number" id="carYear" name="car_year"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   min="1900" max="2099" required>
                        </div>

                        <div class="mb-4">
                            <label for="reviewText" class="block text-gray-700 font-medium mb-2">Your Review</label>
                            <textarea id="reviewText" name="review_text"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 min-h-[150px]"
                                      required></textarea>
                        </div>

                        <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition duration-300 flex items-center justify-center space-x-2">
                            <i class="fas fa-paper-plane"></i>
                            <span>Submit Review</span>
                        </button>
                    </form>
                </div>
            @endauth

            <!-- Customer Reviews -->
            <div class="reviews-section">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Customer Reviews</h2>
                <div id="reviewsContainer">
                    @forelse ($dealership->reviews as $review)
                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                            <p class="text-gray-800 font-semibold">
                                Purchased in {{ $review->car_year }} - {{ $review->user->name ?? 'Unknown User' }}

                            </p>
                            <p class="mt-2 text-gray-700">{{ $review->review_text }}</p>

                            @if ($review->user_id === Auth::id())
                                <div class="mt-4 flex space-x-2">
                                    <a href="{{ route('reviews.edit', $review->id) }}" class="text-blue-500 hover:underline">Edit</a>

                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this review?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    @empty
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <p class="text-gray-600">No reviews yet. Be the first to review this dealership!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Premium Motors. All Rights Reserved.</p>
        </div>
    </footer>
@endsection
