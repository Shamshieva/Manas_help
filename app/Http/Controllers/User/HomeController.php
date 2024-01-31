<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('user.index', compact('subcategories', 'categories'));
    }

    public function show(Category $category)
    {
        $subcategories = $category->subcategories;
        return view('user.show', compact('category','subcategories'));
    }


    public function displayVideo(Video $video)
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('user.show_video', compact('subcategories', 'categories', 'video'));
    }

    public function about()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('user.about', compact('subcategories', 'categories'));
    }
    public function contact()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('user.contact', compact('subcategories', 'categories'));
    }
}
