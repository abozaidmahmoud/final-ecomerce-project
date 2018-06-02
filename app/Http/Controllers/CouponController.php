<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;


class CouponController extends Controller
{
    public function store( Request $request){

     $coupon=Coupon::where('code',$request->code)->first();

     if(!$coupon){

			return back()->with(
				'sucess_message','An error occurred, please type a valid coupon code!'
     		);



    }

    $request->session()->put('coupon',[
				'name'=>$coupon->code,
				'discount'=>$coupon->discount(Cart::subtotal())

    		]);



   return back()->with(
  		'sucess_message','Coupon has been applied ! enjoy '
  	);
}


}
