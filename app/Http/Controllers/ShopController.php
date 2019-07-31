<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     * \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 9;
        $categories = Category::all();

        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
               $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
//            $products = Product::inRandomOrder()->take(12)->get();
//            $products = Product::take(12);
            $products = Product::where('featured', true);
            $categoryName = 'Featured';
        }

        if(request()->sort == 'low_high') {
//            $products = $products->sortBy('price');
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif(request()->sort == 'high_low') {
//            $products = $products->sortByDesc('price');
            $products = $products->orderBy('price', 'DESC')->paginate($pagination);
        }
        else {
            $products = $products->paginate($pagination);
        }
        return view('shop', compact('products', 'categories', 'categoryName'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();

        return view('product', compact('product', 'mightAlsoLike'));
    }
}