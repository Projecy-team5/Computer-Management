<!-- resources/views/components/home/new-arrivals.blade.php -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
            New Arrivals
        </h2>

        <div class="flex overflow-x-auto gap-6 pb-6 snap-x snap-mandatory scrollbar-hide">
            <!-- Repeat cards – horizontal scroll on mobile -->
            <div class="min-w-[280px] sm:min-w-[320px] snap-start">
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <div class="h-56 bg-gray-50 flex items-center justify-center p-6">
                        <img src="https://via.placeholder.com/350x350?text=AM5+Motherboard" alt="" class="max-h-full object-contain">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg line-clamp-2">ASUS ROG Strix X670E-E Gaming WiFi</h3>
                        <div class="mt-3 text-xl font-bold text-indigo-700">$489</div>
                    </div>
                </div>
            </div>

            <!-- ... more horizontal cards ... -->
        </div>
    </div>
</section>