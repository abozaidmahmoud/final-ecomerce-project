<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Desgin;

class Contactus extends Controller
{
    public function index(Request $request){
    	if($request->isMethod('post')){

    		

    		       $contact = new Contact();
    		       $contact->name=$request->name;
    		       $contact->email=$request->email;
    		       $contact->phone=$request->phone;
    		       $contact->message=$request->message;
    		       $contact->save();

    		 return view('Pages.contact',[
    		 	'sucess_message'=>'Thank you for contacting us'
    		 ]);



    	}else{


             
$banner=Desgin::where('place','contactus')->first();


        return view('Pages.contact',[

            'banner'=>$banner
        ]);



    	}

    	
    }


    


}
