<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
   public function index(){

       $data = [];
       $data['categories'] = Category::with('jobs')->OrderDesc();
       $data['jobs'] = Job::with('employer')->OrderDesc();
       return view('home.home',$data);

   }

   public function job_details($id){

       $job = Job::with('employer')->where('id',$id)->first();
       return view('job-details.show',compact('job'));
   }

   public function job_list(){

       $jobs = Job::with('employer')->orderBy('id','desc')->paginate(10);
       return view('job-list.job_list',compact('jobs'));
   }

}
