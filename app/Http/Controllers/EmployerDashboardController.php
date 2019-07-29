<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Employer;
use App\Models\Job;
use App\Models\JobApply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerDashboardController extends Controller
{

    public function employerDashboard(){

        $data = [];
        $data['totalJobs'] = Job::where('employer_id',auth()->id())->count();
        $data['totalApply'] = JobApply::where('employer_id',auth()->id())->count();
       return view('employer-dashboard.dashboard', $data);

    }

    public function applied_applicant(){

        $employer = auth()->id();
        $applicantApplieds = JobApply::with('job')->where('employer_id',$employer)->distinct()->orderBy('id','desc')->select('job_id')->paginate(20);
        return view('employer-dashboard.applied_applicant',compact('applicantApplieds'));
    }

    public function job_applied_details($id){

       $jobAppliedDetails = Job::with('job_applies.applicant.profile')->findOrFail($id);
        return view('employer-dashboard.job_applied_details',compact('jobAppliedDetails'));
    }

    public function applicant($id){

        $applicant = Applicant::with('profile')->findOrFail($id);
        return view('employer-dashboard.applicant',compact('applicant'));
    }

}
