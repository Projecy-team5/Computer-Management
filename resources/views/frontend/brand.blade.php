@extends('layouts.home')
@section('brand')
    <!-- resources/views/components/home/brands-showcase.blade.php -->
    <section class="py-16 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
                Trusted Brands
            </h2>

            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-6 md:gap-10 opacity-90">
                <div class="flex items-center justify-center h-20 md:h-24 bg-white/10 rounded-xl hover:bg-white/20 transition-all">
                    <span class="text-2xl md:text-3xl font-bold">ASUS</span>
                </div>
                <div class="flex items-center justify-center h-20 md:h-24 bg-white/10 rounded-xl hover:bg-white/20 transition-all">
                    <span class="text-2xl md:text-3xl font-bold">MSI</span>
                </div>
                <div class="flex items-center justify-center h-20 md:h-24 bg-white/10 rounded-xl hover:bg-white/20 transition-all">
                    <span class="text-2xl md:text-3xl font-bold">Corsair</span>
                </div>
                <!-- Add more: Intel, AMD, NZXT, Gigabyte, Kingston, Samsung, Cooler Master, etc. -->
            </div>
        </div>
    </section>
@endsection