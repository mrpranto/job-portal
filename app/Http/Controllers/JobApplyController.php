<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApply;
use App\Models\Profile;
use Illuminate\Http\Request;

class JobApplyController extends Controller
{

    public function apply_job(Request $request){

        if (!Profile::where('applicant_id',$request->applicant_id)->select('resume')->first()){
            return redirect()->route('profile')->with('error','You not applied any job, Because Your Resume not upload yet !');
        }

        $jobApply = new JobApply();
        $jobApply->applicant_id = $request->applicant_id;
        $jobApply->job_id = $request->job_id;
        $jobApply->employer_id = $request->employer_id;
        $jobApply->save();

        return redirect()->back()->with('message','Job Apply Successful');
    }


    public function applied_job(){

        $appliedJobs = JobApply::with('job','employer')->where('applicant_id',auth()->id())->get();
        return view('profile.applied-job',compact('appliedJobs'));
    }

}
