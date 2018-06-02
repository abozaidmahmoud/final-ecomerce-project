<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Lang;

class UserController extends Controller
{
    
    public function login(){

        $remember=request()->has('remember')?true:false;
        if(auth()->attempt(['email'=>request('email'),'password'=>request('pass')],$remember)){
            session()->flush();
            return back();
        }
        else{
                    session()->flash('invalid_login','Invalid Email or Password' );
                    return back();
        }

    }

    public function index()
    {
        
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
         
        
       
        DB::table('users')->insert([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>bcrypt(request('pass')),
            
        ]);
        session()->flash('register_success','registeration success');
        return back();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
