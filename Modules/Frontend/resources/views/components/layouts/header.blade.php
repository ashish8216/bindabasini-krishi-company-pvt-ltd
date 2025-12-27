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
                     <span class="text-yellow-300"><i class="fas fa-star"></i> Established 1995</span>
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
             <div class="flex items-center space-x-3">
                 <div class="brand-gradient w-12 h-12 rounded-xl flex items-center justify-center">
                     <i class="fas fa-seedling text-white text-2xl"></i>
                 </div>
                 <div>
                     <h1 class="company-logo text-2xl font-bold text-green-800">
                         Bindabashini Agricultural
                     </h1>
                     <p class="text-xs text-gray-600">Company Pvt. Ltd.</p>
                 </div>
             </div>

             <!-- Search Bar -->
             <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                 <div class="relative w-full">
                     <input type="text" placeholder="Search for farming tools, seeds, fertilizers, equipment..."
                         class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
                     <button
                         class="absolute right-0 top-0 h-full bg-green-600 text-white px-4 rounded-r-lg hover:bg-green-700">
                         <i class="fas fa-search"></i>
                     </button>
                 </div>
             </div>

             <!-- User Actions -->
             <div class="flex items-center space-x-4">
                 <button class="hidden md:flex items-center space-x-1 text-gray-700 hover:text-green-600">
                     <i class="fas fa-user text-xl"></i>
                     <span>Account</span>
                 </button>

                 <button class="relative flex items-center space-x-1 text-gray-700 hover:text-green-600"
                     id="cartButton">
                     <i class="fas fa-shopping-cart text-xl"></i>
                     <span>Cart</span>
                     <span class="cart-badge">3</span>
                 </button>

                 <button class="md:hidden" id="menuToggle">
                     <i class="fas fa-bars text-2xl"></i>
                 </button>
             </div>
         </div>

         <!-- Categories Navigation -->
         <nav class="container hidden md:block border-t py-3">
             <div class="flex items-center justify-between">
                 <div class="flex items-center space-x-6">
                     <a href="#" class="flex items-center space-x-2 text-green-700 font-semibold">
                         <i class="fas fa-home"></i>
                         <span>Home</span>
                     </a>
                     <a href="#" class="text-gray-700 hover:text-green-600 hover:font-medium">Machinery &
                         Tractors</a>
                     <a href="#" class="text-gray-700 hover:text-green-600 hover:font-medium">Hand Tools</a>
                     <a href="#" class="text-gray-700 hover:text-green-600 hover:font-medium">Irrigation
                         Systems</a>
                     <a href="#" class="text-gray-700 hover:text-green-600 hover:font-medium">Seeds &
                         Fertilizers</a>
                     <a href="#" class="text-gray-700 hover:text-green-600 hover:font-medium">Protective Gear</a>
                     <div class="text-sm text-gray-600">
                         <i class="fas fa-truck text-yellow-500"></i> Free Delivery on
                     </div>
                 </div>
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
