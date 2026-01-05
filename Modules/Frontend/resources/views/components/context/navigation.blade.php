<!-- Main Navigation -->
<div class="container flex items-center justify-between py-4">
    <!-- Logo -->
    <div class="flex items-center">
        <div class="bg-green-800 text-white p-2 rounded-lg mr-3">
            <i class="fas fa-tractor text-2xl"></i>
        </div>
        <div>
            <h1 class="text-xl font-bold text-green-900">Bindabasini Krishi</h1>
            <p class="text-xs text-gray-600">Agriculture Tools &amp; Equipment</p>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="hidden md:flex flex-1 max-w-2xl mx-8">
        <div class="relative w-full">
            <input type="text" placeholder="Search for farming tools"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
            <button class="absolute right-0 top-0 h-full bg-green-600 text-white px-4 rounded-r-lg hover:bg-green-700">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>


    <div class="flex items-center space-x-4">

        @auth
            <!-- USER DROPDOWN -->
            <div x-data="{ open: false }" class="relative">
                <!-- Trigger -->
                <button @click="open = !open"
                    class="hidden md:flex items-center space-x-2 text-gray-700 hover:text-green-700 transition">
                    <i class="fas fa-user text-xl"></i>
                    <span>{{ auth()->user()->name }}</span>
                    <i class="fas fa-chevron-down text-sm"></i>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.outside="open = false" x-transition
                    class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg border border-gray-100 py-2 z-50">

                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-user-cog mr-2 text-gray-500"></i> Profile
                    </a>

                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-box mr-2 text-gray-500"></i> My Orders
                    </a>

                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-heart mr-2 text-gray-500"></i> Wishlist
                    </a>

                    <hr class="my-1">

                    <!-- Logout -->
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block px-4 py-2 text-red-600 hover:bg-red-100">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        @else
            <!-- GUEST -->
            <a href="{{ route('login') }}"
                class="bg-green-800 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-900 transition flex items-center space-x-2">
                <i class="fas fa-sign-in-alt"></i>
                <span>Sign In/Up</span>
            </a>
        @endauth

        <!-- Cart -->
        <button
            class="relative flex items-center space-x-1 text-gray-700 hover:text-green-600 p-2 rounded-full transition"
            id="cartButton" aria-label="Cart">
            <i class="fas fa-shopping-cart text-xl"></i>
            <span>Cart</span>
            <span
                class="absolute -top-2 -right-2 bg-red-600 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">3</span>
        </button>

        <!-- Mobile Menu Toggle -->
        <button class="md:hidden p-2 rounded-full" id="menuToggle" aria-label="Menu">
            <i class="fas fa-bars text-2xl"></i>
        </button>

    </div>

</div>
