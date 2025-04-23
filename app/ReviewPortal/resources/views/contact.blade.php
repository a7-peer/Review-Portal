@extends("layouts.appi")
@include("layouts.na")
@section("content")
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6 max-w-4xl mx-auto">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Connect With Premium Motors</h1>
                <p class="text-gray-600">
                    Our team is ready to assist you with any questions about our vehicles, services, or dealership locations. Choose your preferred method of contact below.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Call Us</h3>
                    <p class="mb-2"><a href="tel:+18885558888" class="text-blue-600">(888) 555-8888</a></p>
                    <p class="text-gray-600 text-sm mb-1">Sales: Ext. 1</p>
                    <p class="text-gray-600 text-sm mb-1">Service: Ext. 2</p>
                    <p class="text-gray-600 text-sm">Mon-Fri: 8am-8pm EST</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Email Us</h3>
                    <p class="mb-2"><a href="mailto:sales@premiummotors.com" class="text-blue-600">sales@premiummotors.com</a></p>
                    <p class="mb-2"><a href="mailto:service@premiummotors.com" class="text-blue-600">service@premiummotors.com</a></p>
                    <p class="mb-2"><a href="mailto:info@premiummotors.com" class="text-blue-600">info@premiummotors.com</a></p>
                    <p class="text-gray-600 text-sm">Response within 24 hours</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Visit Us</h3>
                    <p class="text-gray-600 text-sm mb-1">123 Luxury Avenue</p>
                    <p class="text-gray-600 text-sm mb-1">Beverly Hills, CA 90210</p>
                    <p class="text-gray-600 text-sm mb-1">Mon-Fri: 9am-7pm</p>
                    <p class="text-gray-600 text-sm">Sat: 10am-5pm</p>
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
