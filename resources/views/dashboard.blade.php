<x-frontend::index title="User Dashboard - {{ config('app.name') }}">

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1a5f23 0%, #2e7d32 100%);
        }

        .agri-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232e7d32' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="p-6 gradient-bg text-white">
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=ffffff&color=2e7d32"
                                alt="User" class="w-12 h-12 rounded-full border-2 border-white">
                            <div>
                                <h3 class="font-bold text-lg">Welcome back, admin!</h3>
                                <p class="text-green-100 text-sm">Administrator Account</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Navigation -->
                    <nav class="p-4">
                        <ul class="space-y-1">
                            <li>
                                <a href="#" class="flex items-center p-3 rounded-lg bg-green-50 text-green-700">
                                    <i class="fas fa-home mr-3"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                                    <i class="fas fa-shopping-bag mr-3"></i>
                                    <span>My Orders</span>
                                    <span
                                        class="ml-auto bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                                    <i class="fas fa-heart mr-3"></i>
                                    <span>Wishlist</span>
                                    <span
                                        class="ml-auto bg-red-100 text-red-600 text-xs px-2 py-1 rounded-full">5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                                    <i class="fas fa-user mr-3"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                                    <i class="fas fa-cog mr-3"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Quick Stats -->
                        <div class="mt-8 p-4 bg-green-50 rounded-lg">
                            <h4 class="font-semibold text-green-800 mb-3">Quick Stats</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Total Orders</span>
                                    <span class="font-bold text-green-700">12</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Wishlist Items</span>
                                    <span class="font-bold text-red-600">5</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Total Spent</span>
                                    <span class="font-bold text-green-700">$1,250.00</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Main Dashboard Content -->
            <div class="lg:col-span-3">
                <!-- Header -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Dashboard Overview</h2>
                    <p class="text-gray-600">Manage your farming tools purchases and orders</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Orders</p>
                                <p class="text-2xl font-bold mt-1">12</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-shopping-bag text-green-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-green-600 text-sm"><i class="fas fa-arrow-up mr-1"></i> 2 new</span>
                            <span class="text-gray-500 text-sm ml-2">this week</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Wishlist Items</p>
                                <p class="text-2xl font-bold mt-1">5</p>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <i class="fas fa-heart text-blue-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-blue-600 text-sm">Saved for later</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-yellow-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Pending Orders</p>
                                <p class="text-2xl font-bold mt-1">3</p>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <i class="fas fa-clock text-yellow-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-yellow-600 text-sm">Needs attention</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-purple-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Spent</p>
                                <p class="text-2xl font-bold mt-1">$1,250</p>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <i class="fas fa-dollar-sign text-purple-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-green-600 text-sm"><i class="fas fa-arrow-up mr-1"></i> 15%</span>
                            <span class="text-gray-500 text-sm ml-2">from last month</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="p-6 border-b">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold">Recent Orders</h3>
                            <a href="#" class="text-green-600 hover:text-green-800 text-sm font-medium">
                                View All Orders <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ORDER #</th>
                                    <th
                                        class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        DATE</th>
                                    <th
                                        class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ITEMS</th>
                                    <th
                                        class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        STATUS</th>
                                    <th
                                        class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        TOTAL</th>
                                    <th
                                        class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <!-- Order 1 -->
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-6 font-medium text-green-700">#1023</td>
                                    <td class="py-4 px-6">2025-12-31</td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="flex -space-x-2">
                                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop"
                                                    alt="Tool" class="w-8 h-8 rounded-full border-2 border-white">
                                                <img src="https://images.unsplash.com/photo-1592488831111-02e821ed9ac4?w=100&h=100&fit=crop"
                                                    alt="Tool" class="w-8 h-8 rounded-full border-2 border-white">
                                            </div>
                                            <span class="ml-2 text-sm">2 items</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-800 font-medium">
                                            <i class="fas fa-check-circle mr-1"></i> Completed
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 font-bold">$120.00</td>
                                    <td class="py-4 px-6">
                                        <button class="text-green-600 hover:text-green-800 font-medium text-sm">
                                            View <i class="fas fa-external-link-alt ml-1"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Order 2 -->
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-6 font-medium text-green-700">#1022</td>
                                    <td class="py-4 px-6">2025-12-28</td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="flex -space-x-2">
                                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=100&h=100&fit=crop"
                                                    alt="Tool" class="w-8 h-8 rounded-full border-2 border-white">
                                            </div>
                                            <span class="ml-2 text-sm">1 item</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800 font-medium">
                                            <i class="fas fa-clock mr-1"></i> Pending
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 font-bold">$80.00</td>
                                    <td class="py-4 px-6">
                                        <button class="text-green-600 hover:text-green-800 font-medium text-sm">
                                            View <i class="fas fa-external-link-alt ml-1"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Order 3 -->
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-6 font-medium text-green-700">#1021</td>
                                    <td class="py-4 px-6">2025-12-25</td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="flex -space-x-2">
                                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=100&h=100&fit=crop"
                                                    alt="Tool" class="w-8 h-8 rounded-full border-2 border-white">
                                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop"
                                                    alt="Tool" class="w-8 h-8 rounded-full border-2 border-white">
                                                <img src="https://images.unsplash.com/photo-1592488831111-02e821ed9ac4?w=100&h=100&fit=crop"
                                                    alt="Tool" class="w-8 h-8 rounded-full border-2 border-white">
                                            </div>
                                            <span class="ml-2 text-sm">3 items</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-800 font-medium">
                                            <i class="fas fa-check-circle mr-1"></i> Completed
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 font-bold">$210.00</td>
                                    <td class="py-4 px-6">
                                        <button class="text-green-600 hover:text-green-800 font-medium text-sm">
                                            View <i class="fas fa-external-link-alt ml-1"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Order 4 -->
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-6 font-medium text-green-700">#1020</td>
                                    <td class="py-4 px-6">2025-12-22</td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="flex -space-x-2">
                                                <img src="https://images.unsplash.com/photo-1592488831111-02e821ed9ac4?w=100&h=100&fit=crop"
                                                    alt="Tool" class="w-8 h-8 rounded-full border-2 border-white">
                                            </div>
                                            <span class="ml-2 text-sm">1 item</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-800 font-medium">
                                            <i class="fas fa-truck mr-1"></i> Shipped
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 font-bold">$65.00</td>
                                    <td class="py-4 px-6">
                                        <button class="text-green-600 hover:text-green-800 font-medium text-sm">
                                            Track <i class="fas fa-shipping-fast ml-1"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Recent Products & Wishlist -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Popular Products -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold mb-4">Popular Farming Tools</h3>
                        <div class="space-y-4">
                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop"
                                    alt="Tool" class="w-12 h-12 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-medium">Heavy Duty Tiller</h4>
                                    <p class="text-gray-500 text-sm">Cultivation Equipment</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-green-700">$249.99</p>
                                    <button class="mt-1 text-sm text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-cart-plus mr-1"></i> Add
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=100&h=100&fit=crop"
                                    alt="Tool" class="w-12 h-12 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-medium">Irrigation Sprinkler</h4>
                                    <p class="text-gray-500 text-sm">Watering Systems</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-green-700">$89.99</p>
                                    <button class="mt-1 text-sm text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-cart-plus mr-1"></i> Add
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg">
                                <img src="https://images.unsplash.com/photo-1592488831111-02e821ed9ac4?w=100&h=100&fit=crop"
                                    alt="Tool" class="w-12 h-12 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-medium">Garden Pruner Set</h4>
                                    <p class="text-gray-500 text-sm">Pruning Tools</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-green-700">$34.99</p>
                                    <button class="mt-1 text-sm text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-cart-plus mr-1"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist Items -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Your Wishlist (5 items)</h3>
                            <a href="#" class="text-green-600 hover:text-green-800 text-sm">
                                <i class="fas fa-heart mr-1"></i> View All
                            </a>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=100&h=100&fit=crop"
                                    alt="Tool" class="w-12 h-12 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-medium">Portable Chainsaw</h4>
                                    <p class="text-gray-500 text-sm">Cutting Tools</p>
                                    <div class="flex items-center mt-1">
                                        <span class="text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                        <span class="text-gray-500 text-sm ml-2">4.5</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-green-700">$179.99</p>
                                    <button
                                        class="mt-1 text-sm bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700">
                                        Buy Now
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop"
                                    alt="Tool" class="w-12 h-12 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-medium">Soil Testing Kit</h4>
                                    <p class="text-gray-500 text-sm">Testing Equipment</p>
                                    <div class="flex items-center mt-1">
                                        <span class="text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="text-gray-500 text-sm ml-2">4.0</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-green-700">$45.99</p>
                                    <button
                                        class="mt-1 text-sm bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend::index>
