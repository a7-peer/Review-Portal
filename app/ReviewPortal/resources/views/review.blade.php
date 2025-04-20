@extends("layouts.appi")
@include("layouts.na")
@section("content")
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6 max-w-4xl mx-auto">
            <div class="text-center mb-8">
                <h1 id="dealerName" class="text-3xl font-bold text-gray-800 mb-2">Dealership Review</h1>
                <p id="dealerLocation" class="text-gray-600"></p>
            </div>
                @auth
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Write a Review</h2>
                <form id="reviewForm">
                    <input type="hidden" id="dealerId">
                    <div class="mb-4">
                        <label for="reviewerName" class="block text-gray-700 font-medium mb-2">Your Name</label>
                        <input type="text" id="reviewerName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Your Rating</label>
                        <div class="rating-stars flex space-x-2 mb-3">
                            <input type="radio" id="star5" name="rating" value="5" class="hidden">
                            <label for="star5" class="text-2xl text-gray-300 cursor-pointer"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star4" name="rating" value="4" class="hidden">
                            <label for="star4" class="text-2xl text-gray-300 cursor-pointer"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star3" name="rating" value="3" class="hidden">
                            <label for="star3" class="text-2xl text-gray-300 cursor-pointer"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star2" name="rating" value="2" class="hidden">
                            <label for="star2" class="text-2xl text-gray-300 cursor-pointer"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star1" name="rating" value="1" class="hidden" required>
                            <label for="star1" class="text-2xl text-gray-300 cursor-pointer"><i class="fas fa-star"></i></label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="reviewTitle" class="block text-gray-700 font-medium mb-2">Review Title</label>
                        <input type="text" id="reviewTitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="reviewText" class="block text-gray-700 font-medium mb-2">Your Review</label>
                        <textarea id="reviewText" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 min-h-[150px]" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition duration-300 flex items-center justify-center space-x-2">
                        <i class="fas fa-paper-plane"></i>
                        <span>Submit Review</span>
                    </button>
                </form>
            </div>
            @endauth
            <div class="reviews-section">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Customer Reviews</h2>
                <div id="reviewsContainer">
                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <p class="text-gray-600">No reviews yet. Be the first to review this dealership!</p>
                    </div>
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
