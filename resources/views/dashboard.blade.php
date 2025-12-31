<x-frontend::index title="User Dashboard - {{ config('app.name') }}">

    <x-frontend::layouts.breadcrumb title="User Dashboard" :links="[['name' => 'Dashboard', 'path' => '/dashboard']]" />

    <div class="flex h-screen bg-gray-100" x-data="{ sidebarOpen: false }">

        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
               class="fixed md:static inset-y-0 left-0 w-64 bg-white border-r border-gray-200 shadow-lg transform md:translate-x-0 transition-transform duration-300 z-50">

            <!-- Mobile Close Button -->
            <div class="md:hidden flex justify-end p-2">
                <button @click="sidebarOpen = false" class="text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>

            <nav class="flex-1 px-2 py-4 space-y-2">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center px-4 py-2 rounded {{ request()->routeIs('dashboard') ? 'bg-indigo-100 text-indigo-600' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                <a href=""
                   class="flex items-center px-4 py-2 rounded {{ request()->routeIs('orders.*') ? 'bg-indigo-100 text-indigo-600' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-box mr-2"></i> My Orders
                </a>
                <a href=""
                   class="flex items-center px-4 py-2 rounded {{ request()->routeIs('wishlist.*') ? 'bg-indigo-100 text-indigo-600' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-heart mr-2"></i> Wishlist
                </a>
                <a href=""
                   class="flex items-center px-4 py-2 rounded {{ request()->routeIs('profile.*') ? 'bg-indigo-100 text-indigo-600' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-user-cog mr-2"></i> Profile Settings
                </a>
            </nav>
        </aside>

        <!-- Main content wrapper -->
        <div class="flex-1 flex flex-col md:ml-64">

            <!-- Main content -->
            <main class="flex-1 overflow-y-auto p-6">

                <!-- Dashboard Cards / Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow rounded-lg p-4">
                        <h2 class="text-sm text-gray-500">Total Orders</h2>
                        <p class="text-2xl font-bold">{{ $totalOrders ?? 0 }}</p>
                    </div>
                    <div class="bg-white shadow rounded-lg p-4">
                        <h2 class="text-sm text-gray-500">Wishlist Items</h2>
                        <p class="text-2xl font-bold">{{ $wishlistCount ?? 0 }}</p>
                    </div>
                    <div class="bg-white shadow rounded-lg p-4">
                        <h2 class="text-sm text-gray-500">Pending Cart Items</h2>
                        <p class="text-2xl font-bold">{{ $cartCount ?? 0 }}</p>
                    </div>
                </div>

                <!-- Recent Orders Table -->
                <div class="mt-6 bg-white shadow rounded-lg p-4">
                    <h3 class="text-lg font-semibold mb-4">Recent Orders</h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 uppercase">Order #</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 uppercase">Date</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 uppercase">Total</th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                        </tbody>
                    </table>
                </div>

            </main>
        </div>

    </div>

</x-frontend::index>
