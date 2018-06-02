<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desgin;

class Desginpages extends Controller
{

	
    public function aboutUs(){

   $desgin=Desgin::where('place','aboutus')->first();

   return view('Pages.aboutus',[

			'desgin'=>$desgin
   		]);

    }







}
