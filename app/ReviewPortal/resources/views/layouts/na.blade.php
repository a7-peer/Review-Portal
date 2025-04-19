<nav class="bg-gray-900 text-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="text-xl font-bold">Premium Motors</a>

            <!-- Mobile menu button -->
            <button class="lg:hidden focus:outline-none" id="mobile-menu-button" aria-label="Toggle menu" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Desktop menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="hover:text-gray-300 {{ request()->is('/') ? 'text-blue-400' : '' }}">Home</a>
                <a href="{{ route('login') }}" class="hover:text-gray-300 {{ request()->is('login') ? 'text-blue-400' : '' }}">About Us</a>
                <a href="{{ route('login') }}" class="hover:text-gray-300 {{ request()->is('login') ? 'text-blue-400' : '' }}">Contact Us</a>

                @auth
                    <!-- Desktop Dropdown -->
                    <div class="relative">
                        <button class="inline-flex items-center hover:text-gray-300 focus:outline-none" id="user-menu-button">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50" id="user-menu">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="hover:text-gray-300 {{ request()->is('login') ? 'text-blue-400' : '' }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="hover:text-gray-300 {{ request()->is('register') ? 'text-blue-400' : '' }}">Register</a>
                    @endif
                @endauth
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="lg:hidden hidden py-4" id="mobile-menu">
            <div class="flex flex-col space-y-4">
                <a href="{{ url('/') }}" class="block hover:text-gray-300 {{ request()->is('/') ? 'text-blue-400' : '' }}">Home</a>
                <a href="{{ route('login') }}" class="block hover:text-gray-300 {{ request()->is('login') ? 'text-blue-400' : '' }}">About Us</a>
                <a href="{{ route('login') }}" class="block hover:text-gray-300 {{ request()->is('login') ? 'text-blue-400' : '' }}">Contact Us</a>

                @auth
                    <a href="{{ route('profile.edit') }}" class="block hover:text-gray-300 {{ request()->is('profile') ? 'text-blue-400' : '' }}">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block hover:text-gray-300 w-full text-left">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block hover:text-gray-300 {{ request()->is('login') ? 'text-blue-400' : '' }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block hover:text-gray-300 {{ request()->is('register') ? 'text-blue-400' : '' }}">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    // Toggle user dropdown menu
    document.addEventListener('DOMContentLoaded', function() {
        const userMenuButton = document.getElementById('user-menu-button');
        if (userMenuButton) {
            userMenuButton.addEventListener('click', function() {
                document.getElementById('user-menu').classList.toggle('hidden');
            });
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('user-menu');
            if (userMenu && !userMenu.contains(event.target) && !document.getElementById('user-menu-button').contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });
    });
</script>
