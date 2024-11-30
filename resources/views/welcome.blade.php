<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header Section -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">BrandLogo</div>
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-blue-500">Home</a>
                <a href="#" class="hover:text-blue-500">Shop</a>
                <a href="#" class="hover:text-blue-500">About</a>
                <a href="#" class="hover:text-blue-500">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search..."
                    class="hidden md:block w-60 border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <a href="#" class="hover:text-blue-500">Cart</a>
            </div>
        </div>
    </header>

    <!-- Slider Section -->
    <section class="relative">
        <div class="container mx-auto">
            <div class="relative h-64 bg-blue-500 text-white flex items-center justify-center text-3xl font-bold">
                <p>Big Sale! Up to 50% off</p>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6">Shop by Category</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white shadow-md p-4 text-center rounded-md">
                    <h3 class="text-lg font-semibold">Electronics</h3>
                </div>
                <div class="bg-white shadow-md p-4 text-center rounded-md">
                    <h3 class="text-lg font-semibold">Fashion</h3>
                </div>
                <div class="bg-white shadow-md p-4 text-center rounded-md">
                    <h3 class="text-lg font-semibold">Home & Kitchen</h3>
                </div>
                <div class="bg-white shadow-md p-4 text-center rounded-md">
                    <h3 class="text-lg font-semibold">Sports</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Product Card -->
                <div class="bg-white shadow-md p-4 group rounded-md">
                    <img src="{{ asset('image/2.webp') }}" alt="Product"
                        class="w-full h-40 group-hover:scale-[1.05] duration-200 ease-in object-fit-contain rounded-md">
                    <h3 class="mt-4 font-semibold">Product Name</h3>
                    <p class="text-gray-500">Category</p>
                    <p class="mt-2 text-lg font-bold text-blue-500">$99.99</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                        Add to Cart
                    </button>
                </div>

                <div class="bg-white shadow-md p-4 group rounded-md">
                    <img src="{{ asset('image/6.avif') }}" alt="Product"
                        class="w-full h-40 group-hover:scale-[1.05] duration-200 ease-in object-fit-contain rounded-md">
                    <h3 class="mt-4 font-semibold">Product Name</h3>
                    <p class="text-gray-500">Category</p>
                    <p class="mt-2 text-lg font-bold text-blue-500">$99.99</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                        Add to Cart
                    </button>
                </div>

                <div class="bg-white shadow-md p-4 group rounded-md">
                    <img src="{{ asset('image/5.png') }}" alt="Product"
                        class="w-full h-40 group-hover:scale-[1.05] duration-200 ease-in object-fit-contain rounded-md">
                    <h3 class="mt-4 font-semibold">Product Name</h3>
                    <p class="text-gray-500">Category</p>
                    <p class="mt-2 text-lg font-bold text-blue-500">$99.99</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                        Add to Cart
                    </button>
                </div>

                <div class="bg-white shadow-md p-4 group rounded-md">
                    <img src="{{ asset('image/4.jpeg') }}" alt="Product"
                        class="w-full h-40 group-hover:scale-[1.05] duration-200 ease-in object-fit-contain rounded-md">
                    <h3 class="mt-4 font-semibold">Product Name</h3>
                    <p class="text-gray-500">Category</p>
                    <p class="mt-2 text-lg font-bold text-blue-500">$99.99</p>
                    <button id="sslczPayBtn" token="if you have any token validation" postdata=""
                        order="If you already have the transaction generated for current order"
                        endpoint="/pay-via-ajax"> Pay Now
                    </button>
                </div>
                <!-- Repeat Product Card -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 YourBrand. All Rights Reserved.</p>
            <nav class="mt-4">
                <a href="#" class="hover:text-white">Privacy Policy</a> |
                <a href="#" class="hover:text-white">Terms of Service</a> |
                <a href="#" class="hover:text-white">Support</a>
            </nav>
        </div>
    </footer>

    <script>
        var obj = {};
        obj.cus_name = $('#customer_name').val();
        obj.cus_phone = $('#mobile').val();
        obj.cus_email = $('#email').val();
        obj.cus_addr1 = $('#address').val();
        obj.amount = $('#total_amount').val();

        $('#sslczPayBtn').prop('postdata', obj);
    </script>
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
</body>

</html>
