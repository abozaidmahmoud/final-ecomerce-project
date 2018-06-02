<?php

namespace App\Http\Controllers;

use App\Pcategory;
use App\Product;
use App\Post;
use App\Desgin;

use Illuminate\Http\Request;

class index extends Controller
{
    //In Home Page we Need to Get All Products and all Categories

    public function index(){
        $products =Product::inrandomOrder()->take(8)->get();
        $categories=Pcategory::all();
        $banners=Desgin::where('place','homepagebanner')->get();
        $posts=Post::latest()->take(3)->get();

        return view('Pages.index',[
            'products'=>$products,
            'categories'=>$categories,
            'banners'=>$banners,
            'posts'=>$posts
        ]);


    }



}
