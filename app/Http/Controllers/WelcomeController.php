<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(){

       $data = [];
       $data['categories'] = Category::OrderDesc();
       return view('home.home',$data);

   }
}
