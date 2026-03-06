<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Product Categories</h1>
                <p class="text-gray-500 mt-1">Organize your store inventory and hierarchy.</p>
            </div>
            
            <a href="/categories/create" class="inline-flex items-center justify-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-all shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Category
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($categories as $category)
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow p-6 flex flex-col h-full">
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-indigo-50 rounded-xl text-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-gray-400 uppercase tracking-widest">ID: #{{ $category->id }}</span>
                    </div>

                    <h2 class="text-xl font-bold text-gray-800 mb-1">{{ $category->name }}</h2>
                    <p class="text-sm text-gray-400 font-mono mb-4">/{{ $category->slug }}</p>

                    <hr class="border-gray-100 mb-4">

                    <div class="flex-grow">
                        <h3 class="text-xs font-bold text-gray-500 uppercase mb-3">Sub-categories</h3>
                        <div class="space-y-2">
                            @forelse($category->children as $child)
                                <div class="flex items-center text-sm text-gray-600 bg-gray-50 px-3 py-2 rounded-lg border border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                                    </svg>
                                    {{ $child->name }}
                                </div>
                            @empty
                                <p class="text-xs text-gray-400 italic">No sub-categories linked.</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex gap-3">
                        <button class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">Edit</button>
                        <button class="text-sm font-medium text-red-500 hover:text-red-700 transition">Delete</button>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 bg-white rounded-3xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center">
                    <div class="bg-gray-50 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">No categories found</h3>
                    <p class="text-gray-500 mt-1">Get started by creating your first category.</p>
                </div>
            @endforelse
        </div>
    </div>

</body>
</html>