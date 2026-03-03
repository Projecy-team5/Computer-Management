@extends('layouts.home')

@section('content')

    <!-- You can put extra content here that appears BETWEEN hero and product attributes -->
    <div class="py-12 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">This is the TEST page</h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                The layout comes from <code>layouts/home.blade.php</code><br>
                (navbar + hero + product attributes section + footer)
            </p>
        </div>
    </div>

@endsection
