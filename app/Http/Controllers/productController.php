<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Pcategory;
use App\Product;


class productController extends Controller
{
    public function allProduct(Request $request){

            if($request->search){

                  if($request->category=="all"){

            $product=Product::where('name','like','%'.$request->search.'%')
            ->whereBetween('price',[$request->from,$request->to]);
            $activeCategory=Pcategory::where('id',1)->first();
            

                  }else{

                    $product=Product::where('pcategory_id',$request->category)
                    ->whereBetween('price',[$request->from,$request->to])
                    ->where('name','like','%'.request()->search.'%');
                    $activeCategory=Pcategory::where('id',$request->category)->first();
                    
                  }


             

            $categories = Pcategory::all();
            

            

           }

        elseif($request->category){
            $product=Product::where('pcategory_id',request()->category);
            $categories = Pcategory::all();
            $activeCategory=Pcategory::where('id',$request->category)->first();


        }else {


            $product = Product::take(10);
            $categories = Pcategory::all();
            $activeCategory=Pcategory::where('id',1)->first();
        }

       


            $product=$product->paginate(10);
            


        



        return view('Pages.product',[
            'products'=>$product,
            'categories'=>$categories,
            'activeCategory'=>$activeCategory,
        ]);


    }

    public function checkout(Request $request){
        if($request->hasMethod('post')){
            

        }else{
            $Content=Card::Content();


        }



return view('checkout');

    }


}
