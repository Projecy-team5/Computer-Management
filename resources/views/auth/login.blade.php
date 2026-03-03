@extends('layouts.home')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 sm:px-6 lg:px-8 py-12">
    <div class="w-full max-w-md md:max-w-lg lg:max-w-xl bg-white rounded-2xl border border-gray-200 shadow-lg overflow-hidden">

        <!-- Card header / branding area -->
        <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-8 py-10 text-white text-center">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight">
                Sign In
            </h2>
            <p class="mt-3 text-indigo-100 text-base md:text-lg">
                Welcome back • Continue your PC build journey
            </p>
        </div>

        <!-- Form area -->
        <div class="p-6 sm:p-8 lg:p-10">
            <form action="#" method="post" class="space-y-6">

                <!-- Email field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Email address
                    </label>
                    <input
                        id="email"
                        type="email"
                        required
                        class="w-full px-4 py-3.5 border border-gray-300 rounded-xl 
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                               transition duration-200 placeholder-gray-400 text-gray-900"
                        placeholder="your@email.com"
                    >
                </div>

                <!-- Password field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Password
                    </label>
                    <input
                        id="password"
                        type="password"
                        required
                        class="w-full px-4 py-3.5 border border-gray-300 rounded-xl 
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                               transition duration-200 placeholder-gray-400 text-gray-900"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Submit button -->
                <div>
                    <button
                        type="submit"
                        class="w-full py-3.5 px-6 bg-indigo-600 text-white font-medium 
                               rounded-xl hover:bg-indigo-700 active:bg-indigo-800 
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                               transition duration-200 shadow-md hover:shadow-lg"
                    >
                        Sign In
                    </button>
                </div>

            </form>

            <!-- Links section -->
            <div class="mt-8 text-center space-y-3">
                <p class="text-sm text-gray-600">
                    Don't have an account yet?
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 hover:underline transition">
                        Create account
                    </a>
                </p>

                <p class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-700 transition">
                        Forgot password?
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection