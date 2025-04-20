@extends("layouts.appi")
@include("layouts.na")
@section("content")
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="dealerships-section bg-white rounded-lg shadow-md p-6">
            <div class="section-header text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Our Dealership Locations</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Find your nearest Premium Motors dealership to experience our exceptional service and luxury vehicle selection.</p>
            </div>

            <div class="table-responsive dealership-table overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Dealership Name</th>
                        <th class="py-3 px-4 text-left">City</th>
                        <th class="py-3 px-4 text-left">Address</th>
                        <th class="py-3 px-4 text-left">Zip Code</th>
                        <th class="py-3 px-4 text-left text-black">
                            <select id="stateFilter" class="w-full p-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <option value="all">All States</option>
                                <option value="Maryland">Maryland</option>
                                <option value="Virginia">Virginia</option>
                                <option value="Pennsylvania">Pennsylvania</option>
                            </select></th>
                        @auth
                        <th class="py-3 px-4 text-left">Review</th>
                        @endauth
                    </tr>
                    </thead>
                    <tbody id="dealershipTableBody" class="divide-y divide-gray-200">
                    <!-- Sample data - would normally be populated by JavaScript -->
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">1</td>
                        <td class="py-3 px-4"><a href="#" class="text-blue-600 hover:text-blue-800">Premium Motors Baltimore</a></td>
                        <td class="py-3 px-4">Lahore</td>
                        <td class="py-3 px-4">123 Luxury Ave</td>
                        <td class="py-3 px-4">21201</td>
                        <td class="py-3 px-4">Maryland</td>
                        @auth
                        <td class="py-3 px-4">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Add View</a>
                        </td>
                        @endauth
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Premium Motors. All Rights Reserved.</p>
        </div>
    </footer>
@endsection
