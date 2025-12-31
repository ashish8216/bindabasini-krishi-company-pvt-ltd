 <header class="sticky-nav bg-white">

     <!-- Top Bar with Contact Info -->
     <div class="container-fluid bg-green-800 text-white py-2 hidden md:block">
         <div class="container flex justify-between items-center text-sm">
             <div class="flex items-center space-x-6">
                 <div class="flex items-center">
                     <i class="fas fa-phone-alt mr-2"></i>
                     <span>+977 01-1234567</span>
                 </div>
                 <div class="flex items-center">
                     <i class="fas fa-envelope mr-2"></i>
                     <span>info@bindabashiniagricultural.com</span>
                 </div>
                 <div class="flex items-center">
                     <i class="fas fa-map-marker-alt mr-2"></i>
                     <span>Kathmandu, Nepal</span>
                 </div>
             </div>
             <div class="flex items-center space-x-4">
                 <div class="flex space-x-2">
                     <a href="#" class="hover:text-yellow-300"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="hover:text-yellow-300"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="hover:text-yellow-300"><i class="fab fa-instagram"></i></a>
                 </div>
             </div>
         </div>
     </div>

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
                 <button
                     class="absolute right-0 top-0 h-full bg-green-600 text-white px-4 rounded-r-lg hover:bg-green-700">
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

     <div class="bg-[#d97706] text-white  hidden md:block">
         <nav class="container mx-auto flex">
             <a href="#" class=" p-3 font-medium bg-yellow-400 text-green-800 transition">Home</a>
             <!-- active -->
             <a href="#" class="p-3  font-medium hover:bg-yellow-400 hover:text-green-800 transition">Products</a>
             <a href="#" class="p-3 font-medium hover:bg-yellow-400 hover:text-green-800 transition">Dealer
                 Pricing</a>
             <a href="#" class="p-3 font-medium hover:bg-yellow-400 hover:text-green-800 transition">About
                 Us</a>
             <a href="#" class="p-3  font-medium hover:bg-yellow-400 hover:text-green-800 transition">Contact</a>
         </nav>
     </div>



     <!-- Mobile Menu -->
     <div class="md:hidden bg-white border-t hidden" id="mobileMenu">
         <div class="px-4 py-3 space-y-3">
             <div class="relative">
                 <input type="text" placeholder="Search products..."
                     class="w-full px-4 py-2 border border-gray-300 rounded-lg" />
                 <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
             </div>
             <a href="#" class="block py-2 text-gray-700 hover:text-green-600 font-medium">Home</a>
             <a href="#" class="block py-2 text-gray-700 hover:text-green-600">Machinery & Tractors</a>
             <a href="#" class="block py-2 text-gray-700 hover:text-green-600">Hand Tools</a>
             <a href="#" class="block py-2 text-gray-700 hover:text-green-600">Irrigation Systems</a>
             <a href="#" class="block py-2 text-gray-700 hover:text-green-600">Seeds & Fertilizers</a>
             <a href="#" class="block py-2 text-gray-700 hover:text-green-600">Protective Gear</a>
         </div>
 </header>
