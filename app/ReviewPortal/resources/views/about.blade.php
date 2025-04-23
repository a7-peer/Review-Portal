@extends("layouts.appi")
@include("layouts.na")
@section("content")
    <main class="flex-grow container mx-auto px-4 py-8">
        <!-- About Section -->
        <div class="bg-white rounded-lg shadow-md p-6 max-w-4xl mx-auto">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">About Premium Motors</h1>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Welcome to Premium Motors, a premier automotive dealership with branches spanning across the country.
                    We are committed to excellence and pride ourselves on providing top-tier customer service and a vast
                    selection of quality vehicles.
                </p>
            </div>

            <!-- Team Section -->
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Our Leadership Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Team Member 1 -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm text-center">
                        <img src="{{ asset('img/ceo3.jpg') }}" alt="CEO" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow">
                        <h3 class="text-xl font-semibold text-gray-800">John Wilson</h3>
                        <p class="text-blue-600 font-medium mb-2">CEO & Founder</p>
                        <p class="text-gray-600 text-sm">
                            Leading the business with strategic vision and customer-first approach since 2010.
                        </p>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm text-center">
                        <img src="{{ asset('img/ceo1.jpg') }}" alt="CEO" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow">
                        <h3 class="text-xl font-semibold text-gray-800">Emma Scott</h3>
                        <p class="text-blue-600 font-medium mb-2">Chief Marketing Officer</p>
                        <p class="text-gray-600 text-sm">
                            Driving innovative marketing strategies and brand evolution for the digital age.
                        </p>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm text-center">
                        <img src="{{ asset('img/ceo2.jpg') }}" alt="CEO" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow">
                        <h3 class="text-xl font-semibold text-gray-800">Emil Uchida</h3>
                        <p class="text-blue-600 font-medium mb-2">Chief Financial Officer</p>
                        <p class="text-gray-600 text-sm">
                            Ensuring financial stability and strategic resource management across all locations.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Company Values -->
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Our Core Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Value 1 -->
                    <div class="bg-blue-50 rounded-lg p-6 text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-handshake text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Customer Commitment</h3>
                        <p class="text-gray-600 text-sm">
                            We develop relationships that make a positive difference in our customers' lives.
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-blue-50 rounded-lg p-6 text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-medal text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Quality</h3>
                        <p class="text-gray-600 text-sm">
                            We provide outstanding products and unsurpassed service that deliver premium value.
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-blue-50 rounded-lg p-6 text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Integrity</h3>
                        <p class="text-gray-600 text-sm">
                            We uphold the highest standards of integrity in all of our actions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
