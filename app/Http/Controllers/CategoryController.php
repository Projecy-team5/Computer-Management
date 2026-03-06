<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    // public function index(): View
    // {
    //     // Get all top-level categories with their children
    //     $categories = Category::whereNull('parent_id')->with('children')->get();

    //     return view('categories.index', compact('categories'));
    // }
    public function index()
        {
            // withCount('products') adds a 'products_count' variable to each category automatically!
            $categories = Category::whereNull('parent_id')
                ->with(['children' => function($query) {
                    $query->withCount('products');
                }])
                ->withCount('products')
                ->get();

            return view('categories.index', compact('categories'));
        }
}
