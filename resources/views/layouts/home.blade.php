<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PC Shop Cambodia') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 antialiased">

    <!-- Navbar (simple example – you can make it more complex later) -->
    @include('layouts.navbar')

    <!-- Main content area -->
    <main class="min-h-screen">

        <!-- Hero section (optional – can remove or keep) -->
        {{-- <section class="relative bg-gray-900 text-white py-20 md:py-32">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome to PC Shop Cambodia</h1>
                <p class="text-xl mb-8 max-w-3xl mx-auto">Premium PC components • Fast delivery • Best prices</p>
                <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-4 px-10 rounded-lg text-lg transition">
                    Shop Now
                </a>
            </div>
        </section> --}}
        {{-- @include('layouts.arrival') --}}

        <!-- This is where test.blade.php can inject its own content -->
        @yield('content')
        {{-- @include('layouts.product') --}}

        {{-- @include('frontend.brand') --}}
        @yield('brand')

        <!-- Example: Product Attributes Section (static for now) -->
        {{-- <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
                    Example Product Specifications
                </h2>

                <div class="max-w-4xl mx-auto bg-gray-50 rounded-xl shadow-lg p-8">
                    <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        <div>
                            <dt class="font-semibold text-gray-700">CPU Socket</dt>
                            <dd class="text-gray-600">AM5</dd>
                        </div>
                        <div>
                            <dt class="font-semibold text-gray-700">Cores / Threads</dt>
                            <dd class="text-gray-600">16 / 32</dd>
                        </div>
                        <div>
                            <dt class="font-semibold text-gray-700">Base / Boost Clock</dt>
                            <dd class="text-gray-600">4.5 GHz / 5.7 GHz</dd>
                        </div>
                        <div>
                            <dt class="font-semibold text-gray-700">TDP</dt>
                            <dd class="text-gray-600">170W</dd>
                        </div>
                        <div>
                            <dt class="font-semibold text-gray-700">RAM Support</dt>
                            <dd class="text-gray-600">DDR5-6000+, up to 192GB</dd>
                        </div>
                        <div>
                            <dt class="font-semibold text-gray-700">Integrated Graphics</dt>
                            <dd class="text-gray-600">AMD Radeon Graphics</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section> --}}


    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>