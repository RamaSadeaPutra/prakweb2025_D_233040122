<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // JANGAN LUPA INI!
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Ambil semua data Category
        $categories = Category::all();
        
        // Kirim data ke view 'categories'
        return view('categories', compact('categories'));
    }
}