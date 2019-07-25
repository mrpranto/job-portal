<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(){

       $data = [];
       $data['categories'] = Category::OrderDesc();
       $data['jobs'] = Job::OrderDesc();
       return view('home.home',$data);

   }
}
