<?php

Route::get('Lang/{lang}',function($lang){

    if(in_array($lang,['en','ar'])){
        if(session()->has('lang')){
            session()->forget('lang');
        }
        session()->put('lang',$lang);
    }
    else{
        session()->put('lang','en');
    }

    return back();
});

Route::group(['middleware'=>'Lang'],function(){
Route::group(['prefix' => 'blog'], function () {


    Route::get('/','blogController@index')->name('blog.index');
    Route::get('{id}','blogController@blogDetails')->name('blog.details');;



});

Route::get('/','index@index')->name('homepage');



Route::get('contact','Contactus@index')->name('contact');
Route::post('contact','Contactus@index')->name('contact');




   Route::get('about','Desginpages@aboutUs')->name('about');






Route::group(['prefix' => 'product'], function () {

    Route::get('/','productController@allProduct')->name('product');

    Route::get('{id}','shopmachine@productDetails');


});






Route::group(['prefix' => 'cart'], function () {



    //cart page
    Route::get('/','CardController@store')->name('cart.index');
    Route::post('/','CardController@store')->name('cart.index');



   //destroy cart session
    Route::get('destroy',function(){
        Cart::destroy();
        return redirect()
        ->route('cart.index')
        ->with('sucess_message','Shop Card Is Destroyed !');
    });

    Route::delete('{id}','CardController@destroy')->name('cart.delete');




   //checkout page
    Route::get('checkout','CardController@checkout')->name('cart.checkout');
    Route::post('checkout','CardController@checkout')->name('cart.checkout');

    Route::post('/coupon','CouponController@store')->name('cart.coupon');

    



});


});

//user login
Route::post('user/login','UserController@login');
//user register
Route::resource('user/register','UserController');

//user routes
Route::resource('user','UserController');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
