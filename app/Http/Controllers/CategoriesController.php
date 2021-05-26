<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function index()
    {
        // esto equivale a select*from categories;
        $categories =Category::all();
        return view('welcome',['categories'=> $categories]);
    }
}
