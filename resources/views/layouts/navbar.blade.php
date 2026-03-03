    <nav class="bg-gray-900 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold">PC Cambodia</a>
                
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-indigo-400 transition">Home</a>
                    <a href="#" class="hover:text-indigo-400 transition">Categories</a>
                    <a href="{{ route('brand') }}" class="hover:text-indigo-400 transition">Brands</a>
                    <a href="#" class="hover:text-indigo-400 transition">New Arrivals</a>
                    <a href="#" class="hover:text-indigo-400 transition">Cart</a>
                </div>

                <div class="flex items-center space-x-6">
                    <a href="{{ route('login') }}" class="hover:text-indigo-400">Login</a>
                    <a href="#" class="bg-indigo-600 hover:bg-indigo-700 px-5 py-2 rounded-lg transition">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>