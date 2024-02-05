<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('user.category.index', compact('categories'));
    }

    public function posts(Category $category)
    {
        $subcategories = $category->subcategories;
        return view('user.category.posts', compact('subcategories'));
    }
}
