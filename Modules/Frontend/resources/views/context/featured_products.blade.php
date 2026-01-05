<style>
    .card-hover:hover {
        transform: translateY(-4px);
        transition: all 0.3s ease;
    }

    .price-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: #dc2626;
        color: #fff;
        font-size: 0.75rem;
        font-weight: bold;
        padding: 4px 10px;
        border-radius: 999px;
    }
</style>




<!-- Featured Products -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-10">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">
                    Featured Products
                </h2>
                <p class="text-gray-600">
                    Best-selling agricultural tools and farming solutions
                </p>
            </div>

            <!-- User Type Selector -->
            <div class="flex items-center space-x-4 mt-4 md:mt-0">
                <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow border">
                    <i class="fas fa-user mr-2 text-gray-500"></i>
                    <select id="userType" class="bg-transparent focus:outline-none text-gray-700 font-medium">
                        <option value="retail">Retail Customer</option>
                        <option value="retailer">Retailer</option>
                        <option value="dealer">Dealer</option>
                        <option value="province">Province</option>
                        <option value="shareholder">Shareholder</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Product Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">

                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1595231776515-ddffb1f4eb73?auto=format&fit=crop&w=800&q=80"
                        alt="Agriculture Sprayer" class="w-full h-56 object-cover">

                    <div class="price-badge">15% OFF</div>

                    <span
                        class="absolute top-3 right-3 bg-green-700 text-white text-xs px-3 py-1 rounded-full font-bold">
                        BINDABASINI
                    </span>
                </div>

                <div class="p-5">
                    <h3 class="font-bold text-lg mb-2">
                        Professional Agriculture Sprayer
                    </h3>

                    <p class="text-gray-600 text-sm mb-4">
                        High-pressure 20L sprayer for pesticides, herbicides,
                        and liquid fertilizers.
                    </p>

                    <!-- Price Section -->
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-1">Your Price</p>
                        <div class="flex items-center gap-2 flex-wrap">
                            <span id="mainPrice" class="text-2xl font-bold text-green-900">
                                Rs. 12,500
                            </span>
                            <span id="oldPrice" class="text-sm text-gray-400 line-through">
                                Rs. 14,700
                            </span>
                            <span class="text-sm font-semibold text-green-700">
                                15% OFF
                            </span>
                        </div>
                    </div>

                    <!-- Other Prices -->
                    <div class="border-t pt-4">
                        <p class="text-xs text-gray-500 mb-2">
                            Other pricing tiers
                        </p>
                        <div class="grid grid-cols-2 gap-1 text-xs">
                            <div><b>Retailer:</b> Rs. 11,800</div>
                            <div><b>Dealer:</b> Rs. 11,200</div>
                            <div><b>Province:</b> Rs. 10,600</div>
                            <div><b>Shareholder:</b> Rs. 9,900</div>
                        </div>
                    </div>

                    <button
                        class="w-full mt-4 bg-green-800 text-white py-3 rounded-lg font-semibold hover:bg-green-900 transition">
                        <i class="fas fa-cart-plus mr-2"></i>
                        Add to Cart
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- JS: Price Switching -->
<script>
    const prices = {
        retail: 12500,
        retailer: 11800,
        dealer: 11200,
        province: 10600,
        shareholder: 9900
    };

    const originalPrice = 14700;

    const userTypeSelect = document.getElementById("userType");
    const mainPrice = document.getElementById("mainPrice");
    const oldPrice = document.getElementById("oldPrice");

    function updatePrice() {
        const type = userTypeSelect.value;
        mainPrice.textContent = "Rs. " + prices[type].toLocaleString();
        oldPrice.textContent = "Rs. " + originalPrice.toLocaleString();
    }

    userTypeSelect.addEventListener("change", updatePrice);
</script>
