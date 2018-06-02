<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;
use App\Pcategory;

class blogController extends Controller
{



public function index(){


    $posts=Post::latest()->paginate(10);
    $products=Product::latest()->take(5)->get();
    $categories=Pcategory::all();


    return view('Pages.blog',[
'posts'=>$posts,
'products'=>$products,
'categories'=>$categories,
    ]);

}



public function blogdetails($id){


    $posts=Post::where('id',$id)->first();
    $products=Product::latest()->take(5)->get();
    $categories=Pcategory::all();


    return view('Pages.blogdetails',[
			'post'=>$posts,
			'products'=>$products,
			'categories'=>$categories,
    ]);

}





    }
