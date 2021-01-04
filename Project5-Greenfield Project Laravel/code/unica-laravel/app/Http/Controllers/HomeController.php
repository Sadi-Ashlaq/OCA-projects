<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

use App\Supplier;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $catshop = Category::where('cat_type', 'Shop')->get();
        $cathandcraft = Category::where('cat_type', 'Handcraft')->get();
        $products = Product::all();

        return view('index', compact('catshop', 'cathandcraft', 'products'));
        // return view('index');
    }

    public function admin()
    {

        return view('dashboard.dashboard');
    }

    public function showIndex()
    {
    }
}
