@extends('layouts.home')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 sm:px-6 lg:px-8 py-12">
    <div class="w-full max-w-md md:max-w-lg lg:max-w-xl bg-white rounded-2xl border border-gray-200 shadow-lg overflow-hidden">

        <!-- Card header -->
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
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Email address
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        class="w-full px-4 py-3.5 border border-gray-300 rounded-xl
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                               transition duration-200 placeholder-gray-400 text-gray-900
                               {{ $errors->has('email') ? 'border-red-500 ring-2 ring-red-500' : '' }}"
                        placeholder="your@email.com"
                    >
                    @error('email')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Password
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                        class="w-full px-4 py-3.5 border border-gray-300 rounded-xl
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                               transition duration-200 placeholder-gray-400 text-gray-900
                               {{ $errors->has('password') ? 'border-red-500 ring-2 ring-red-500' : '' }}"
                        placeholder="••••••••"
                    >
                    @error('password')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember me + Forgot password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            id="remember" 
                            name="remember" 
                            type="checkbox" 
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                        >
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        {{-- <a href="{{ route('password.request') }}" class="text-indigo-600 hover:text-indigo-800 transition">
                            Forgot password?
                        </a> --}}
                    </div>
                </div>

                <!-- Submit -->
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

            <!-- Links -->
            <div class="mt-8 text-center space-y-3">
                <p class="text-sm text-gray-600">
                    Don't have an account yet?
                    {{-- <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:text-indigo-800 hover:underline transition">
                        Create account
                    </a> --}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection