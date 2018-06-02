<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usershopController extends Controller
{
    


// get All Shops
public function index($id){

	$shop =Shop::where('id',$id)->first();

	return view('Pages.shop',['shop'=>$shop]);



}


public function addproduct(Request $request,$code){

	$product=Product::where('code',$code)->first();
	$sProduct=new Sproduct();
	$sProduct->name=$product->name;
	$sProduct->ar_name=$product->ar_name;
	$sProduct->price=$product->price;
	$sProduct->image=$product->imageOne;
	$sProduct->shop_id=Auth::id();
	$sProduct->save();
	$request->session()->flash('status', 'The product has been successfully added to your store');

}


public function deleteproduct(Request $request,$code){
		$product=Product::where('code',$code)->first();
		$product->delete();

     $request->session()->flash('status', 'The product has been Deleted From your store');
}










}
