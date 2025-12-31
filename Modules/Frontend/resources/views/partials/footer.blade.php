<script src="https://unpkg.com/alpinejs" defer></script>

@stack('scripts')

<script>
    // Mobile menu toggle
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    menuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        // Change icon
        const icon = menuToggle.querySelector("i");
        if (icon.classList.contains("fa-bars")) {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-times");
        } else {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
        }
    });

    // Cart functionality
    const cartButton = document.getElementById("cartButton");
    const cartOverlay = document.getElementById("cartOverlay");
    const closeCart = document.getElementById("closeCart");

    cartButton.addEventListener("click", () => {
        cartOverlay.classList.remove("hidden");
    });

    closeCart.addEventListener("click", () => {
        cartOverlay.classList.add("hidden");
    });

    // Close cart when clicking outside
    cartOverlay.addEventListener("click", (e) => {
        if (e.target === cartOverlay) {
            cartOverlay.classList.add("hidden");
        }
    });

    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll(".btn-primary");
    const cartBadge = document.querySelector(".cart-badge");

    addToCartButtons.forEach((button) => {
        if (button.textContent.includes("Add")) {
            button.addEventListener("click", function() {
                // Get product info
                const productCard = this.closest(".product-card");
                const productName = productCard.querySelector("h3").textContent;
                const productPrice =
                    productCard.querySelector(".text-2xl").textContent;

                // Show notification
                alert(`Added ${productName} to cart for ${productPrice}`);

                // Update cart badge
                let currentCount = parseInt(cartBadge.textContent);
                cartBadge.textContent = currentCount + 1;

                // Animate the badge
                cartBadge.classList.add("scale-125");
                setTimeout(() => {
                    cartBadge.classList.remove("scale-125");
                }, 300);
            });
        }
    });

    // Sticky header effect on scroll
    window.addEventListener("scroll", function() {
        const header = document.querySelector(".sticky-nav");
        if (window.scrollY > 100) {
            header.classList.add("nav-scrolled");
        } else {
            header.classList.remove("nav-scrolled");
        }
    });

    // Initialize with sticky nav check
    window.dispatchEvent(new Event("scroll"));
</script>
