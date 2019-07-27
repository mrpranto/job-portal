<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{

    public function profile(){

        return view('profile.profile');

    }
    public function view_resume(){

        return view('profile.view-resume');

    }

    public function edit_resume(){

        return view('profile.edit');

    }

    public function rules(){

        return [

            'skill' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|image|max:1024',
            'resume' => 'required|mimes:pdf,docx|file|max:1024',

        ];

    }

    public function addResume(Request $request){

        $this->validate($request,$this->rules());

        $slug  = str_slug(auth()->user()->first_name.'_'.auth()->user()->last_name,'_');
        $image = $request->file('image');
        $resume = $request->file('resume');

        $id = auth()->id();
        $applicant = Applicant::findOrFail($id);

        if (isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug.'_'.$currentDate.'_'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/image')){
                mkdir('uploads/image',0777,true);
            }

            $image->move('uploads/image',$imageName);

        }else{

            return redirect()->back()->with('error','Image is not uploaded.');

        }

        if (isset($resume)){

            $currentDate = Carbon::now()->toDateString();
            $resumeName   = $slug.'_'.$currentDate.'_'.uniqid().'.'.$resume->getClientOriginalExtension();

            if (!file_exists('uploads/resume')){
                mkdir('uploads/resume',0777,true);
            }

            $resume->move('uploads/resume',$resumeName);

        }else{

            return redirect()->back()->with('error','Resume is not uploaded.');

        }

        Profile::insert([
            'applicant_id' => auth()->id(),
            'skill' => $request->skill,
            'image' => $imageName,
            'resume' => $resumeName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        return redirect()->route('view.resume')->with('message', 'Profile Information Added Successful');

    }


    public function updateRules(){

        return [

            'skill' => 'required',
            'image' => 'mimes:jpg,jpeg,png|image|size:1024',
            'resume' => 'mimes:pdf,docx|file|size:1024',

        ];

    }

    public function updateResume(Request $request){

        $this->validate($request,$this->updateRules());

        $slug  = str_slug(auth()->user()->first_name.'_'.auth()->user()->last_name,'_');
        $image = $request->file('image');
        $resume = $request->file('resume');

        $id = auth()->id();
        $applicant = Applicant::findOrFail($id);

        if (isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imageName   = $slug.'_'.$currentDate.'_'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/image')){
                mkdir('uploads/image',0777,true);
            }

            if (isset($applicant->profile->image)){
                unlink('uploads/image/'.$applicant->profile->image);
            }

            $image->move('uploads/image',$imageName);

        }else{

            $imageName = $applicant->profile->image;

        }

        if (isset($resume)){

            $currentDate = Carbon::now()->toDateString();
            $resumeName   = $slug.'_'.$currentDate.'_'.uniqid().'.'.$resume->getClientOriginalExtension();

            if (!file_exists('uploads/resume')){
                mkdir('uploads/resume',0777,true);
            }


            if (isset($applicant->profile->resume)){
                unlink('uploads/resume/'.$applicant->profile->resume);
            }

            $resume->move('uploads/resume',$resumeName);

        }else{

            $resumeName = $applicant->profile->resume;

        }

        Profile::where('applicant_id',$id)->update([
            'skill' => $request->skill,
            'image' => $imageName,
            'resume' => $resumeName,
            'updated_at' => Carbon::now(),
        ]);



        return redirect()->route('view.resume')->with('message', 'Profile Information Update Successful');

    }

}
