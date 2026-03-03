<!-- resources/views/components/home/featured-products.blade.php -->
<section class="py-16">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Featured Products
            </h2>
            <a href="#" class="mt-4 md:mt-0 text-indigo-600 hover:text-indigo-800 font-medium flex items-center gap-2">
                View All Featured →
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Sample static card – repeat 4–8 times -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="relative h-64 bg-gray-50 flex items-center justify-center p-8">
                    <img src="https://via.placeholder.com/400x400?text=RTX+4070+Ti" alt="Product" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full">
                        New
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 line-clamp-2 mb-2">
                        MSI GeForce RTX 4070 Ti Gaming X Trio 12GB
                    </h3>
                    <div class="flex items-center justify-between mt-4">
                        <div class="text-2xl font-bold text-indigo-700">$899</div>
                        <span class="text-sm text-green-600 font-medium">In Stock</span>
                    </div>
                    <button class="mt-6 w-full bg-gray-900 hover:bg-gray-800 text-white font-medium py-3 rounded-xl transition">
                        Add to Cart
                    </button>
                </div>
            </div>

            <!-- ... more cards here ... -->
        </div>
    </div>
</section>