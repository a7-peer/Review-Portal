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
                        <th class="py-3 px-4 text-left">
                            <form method="GET" action="{{ route('dealerships') }}" class="flex items-center space-x-2">
                                <label for="state" class="text-white text-sm">State:</label>
                                <select name="state" id="state"
                                        onchange="this.form.submit()"
                                        class="text-sm text-gray-800 rounded p-1 bg-white border border-gray-300 focus:outline-none focus:ring focus:border-blue-300">
                                    <option value="">All</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}" {{ request('state') == $state ? 'selected' : '' }}>
                                            {{ $state }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </th>

                    @auth
                            <th class="py-3 px-4 text-left">Actions</th>
                        @endauth
                    </tr>
                    </thead>
                    <tbody id="dealershipTableBody" class="divide-y divide-gray-200">
                    @foreach ($dealerships as $dealer)
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">{{ $dealer->id }}</td>
                            <td class="py-3 px-4">
                                <a href="" class="text-blue-600 hover:text-blue-800">
                                    {{ $dealer->name }}
                                </a>
                            </td>
                            <td class="py-3 px-4">{{ $dealer->city }}</td>
                            <td class="py-3 px-4">{{ $dealer->address }}</td>
                            <td class="py-3 px-4">{{ $dealer->zip_code }}</td>
                            <td class="py-3 px-4">{{ $dealer->state }}</td>
                            @auth
                                <td class="py-3 px-4 space-x-2">
                                    <a href="{{ route('to_review', $dealer->id) }}" class="text-green-600 hover:text-green-800">Add Review</a>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
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
