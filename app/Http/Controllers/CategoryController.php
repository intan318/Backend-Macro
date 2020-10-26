<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getAllCategory(){
        $category = Category::all();

        return response()->json([
            'category' => $category
        ]);
    }
}
