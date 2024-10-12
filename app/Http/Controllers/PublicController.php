<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;


use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $categories = Category::with(['products' => function ($query) {
            $query->where('published', 1)->latest()->take(1);
        }])->latest()->limit(4)->get();

        $latestwomenProducts = Product::where('published', 1)
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->get();
        //dd($categories);
        return view('public.index',compact('categories','latestwomenProducts'));
    }
    public function about()
    {
        
        return view('public.about');
    }

    public function contact()
    {
        
        return view('public.contact');
    }

    public function products()
    {
        
        return view('public.products');
    }

    public function singleProduct()
    {
        
        return view('public.single-product');
    }




}
