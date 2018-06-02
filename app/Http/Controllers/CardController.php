<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use App\Productorder;


class CardController extends Controller
{
	




	public function store(Request $request){
		//vaild one -> Cart::add('293ad', 'Product 1', 1, 9.99);
		if($request->isMethod('post')){

		Cart::add(
			$request->id,
			$request->name,
			$request->qty,
			$request->price)->associate('App\Product');


          $Ccontent=Cart::content();
          $Ccount=Cart::count();

		return redirect()->route('cart.index');
	}


return view('Pages.shopcard');
}

	
	public function destroy($id)
	{
		Cart::remove($id);
		return back()->with('sucess_message','Item has been removed!');
	}

	



	public function checkout(Request $request){


		if($request->isMethod('post')){
		
		$firstName=$request->firstName;
		$lastName=$request->lastName;
		$email=$request->email;
		$phone=$request->phone;
		$address=$request->address;
		$country=$request->country;
		$state=$request->state;

		
        if(session()->has('coupon')){
			 $total=(int)str_replace(',','',Cart::total());
             $total=Cart::subtotal()-(int)session()->get('coupon')['discount'];
		}else{
			 $total=Cart::subtotal();
		}
		if($total<0) 
			$total=0;
		
		

		$order=new Order();


		$order->firstName=$firstName;
		$order->lastName=$lastName;
		$order->email=$email;
		$order->phone=$phone;
		$order->address=$address;
		$order->country=$country;
		$order->state=$state;
		$order->subTotal=$total;
		$order->subTotal=$total;
		$order->state='pending';
		$order->save();


		foreach(Cart::content() as $item){
			$product= new Productorder();
			$product->pid=$item->model->code;	
			$product->price=$item->price;
			$product->qty=$item->qty;
			$product->order_id=$order->id;
			$product->save();

		//you can make it better too : Productorder::create([]);

		}

		Cart::destroy();
		$request->session()->forget('coupon');

		return redirect()->route('cart.index')->with([

  		'sucess_message','Thank you for purchasing products from our website'
  	]);

}else{


return view('Pages.checkout');

}




		




	}
}




/*


public function saveForLater($id){
		$item=Cart::get($id);
		Cart::remove($id);
Cart::instance('wishlist')->add($item->id,$item->name,$item->qty,$item->price)->associate('App\Product');


		return redirect()->route('cart.index')->with('sucess_message','Item was Added to your WishList !');
	}


 */