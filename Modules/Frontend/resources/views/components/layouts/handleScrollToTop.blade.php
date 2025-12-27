<!-- Shopping Cart Sidebar -->
    <div
      class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden"
      id="cartOverlay"
    >
      <div
        class="absolute right-0 top-0 h-full w-full md:w-1/3 bg-white shadow-xl"
      >
        <div class="p-6">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Shopping Cart</h2>
            <button id="closeCart" class="text-gray-500 hover:text-gray-700">
              <i class="fas fa-times text-2xl"></i>
            </button>
          </div>

          <div class="space-y-4 mb-6">
            <!-- Cart Item 1 -->
            <div class="flex items-center border-b pb-4">
              <img
                src="https://images.unsplash.com/photo-1524472922592-687759b73c0e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                alt="Pruning Shears"
                class="w-20 h-20 object-cover rounded-lg"
              />
              <div class="ml-4 flex-1">
                <h4 class="font-bold">Pruning Shears</h4>
                <p class="text-gray-600 text-sm">Professional grade</p>
                <div class="flex justify-between items-center mt-2">
                  <div class="flex items-center">
                    <button class="w-8 h-8 bg-gray-200 rounded-lg">-</button>
                    <span class="mx-2">1</span>
                    <button class="w-8 h-8 bg-gray-200 rounded-lg">+</button>
                  </div>
                  <span class="font-bold">Rs. 1,850</span>
                </div>
              </div>
              <button class="text-red-500 ml-4">
                <i class="fas fa-trash"></i>
              </button>
            </div>

            <!-- Cart Item 2 -->
            <div class="flex items-center border-b pb-4">
              <img
                src="https://images.unsplash.com/photo-1554561583-61cbf8c63c15?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                alt="Harvesting Sickle"
                class="w-20 h-20 object-cover rounded-lg"
              />
              <div class="ml-4 flex-1">
                <h4 class="font-bold">Harvesting Sickle</h4>
                <p class="text-gray-600 text-sm">Stainless steel</p>
                <div class="flex justify-between items-center mt-2">
                  <div class="flex items-center">
                    <button class="w-8 h-8 bg-gray-200 rounded-lg">-</button>
                    <span class="mx-2">2</span>
                    <button class="w-8 h-8 bg-gray-200 rounded-lg">+</button>
                  </div>
                  <span class="font-bold">Rs. 2,200</span>
                </div>
              </div>
              <button class="text-red-500 ml-4">
                <i class="fas fa-trash"></i>
              </button>
            </div>
          </div>

          <div class="border-t pt-4">
            <div class="flex justify-between mb-2">
              <span>Subtotal</span>
              <span class="font-bold">Rs. 4,050</span>
            </div>
            <div class="flex justify-between mb-2">
              <span>Shipping</span>
              <span class="font-bold text-green-600">FREE</span>
            </div>
            <div class="flex justify-between mb-6 text-lg font-bold">
              <span>Total</span>
              <span>Rs. 4,050</span>
            </div>

            <button class="btn-primary w-full py-3 mb-3">
              Proceed to Checkout
            </button>
            <button
              class="bg-white text-green-700 border-2 border-green-700 font-semibold py-2 px-6 rounded-lg hover:bg-green-50 w-full"
            >
              Continue Shopping
            </button>
          </div>
        </div>
      </div>
    </div>
