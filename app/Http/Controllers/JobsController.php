<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\JobApply;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employer = auth()->id();
        $jobs = Job::with('category')->where('employer_id',$employer)->orderBy('id','desc')->paginate(10);
        return view('job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::OrderDesc();
        return view('job.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function rules(){

        return [

            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'country' => 'required',
            'job_type' => 'required',
            'status' => 'required',

        ];

    }


    public function store(Request $request)
    {

        $this->validate($request,$this->rules());

        Job::insert([
            'employer_id' => auth()->id(),
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'salary' => $request->salary,
            'location' => $request->location,
            'country' => $request->country,
            'job_type' => $request->job_type,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($request->status == 0){
            return redirect()->route('job.index')->with('message','Job Create Successful but Not Post Yet.');
        }

        return redirect()->route('job.index')->with('message','Job Post Successful');

    }


    public function publish($id){
        $job = Job::findOrFail($id);
        $job->status = 1;
        $job->save();

        return redirect()->back()->with('message','Job Publish Successful');
    }

    public function un_publish($id){
        $job = Job::findOrFail($id);
        $job->status = 0;
        $job->save();

        return redirect()->back()->with('message','Job Un-Publish Successful');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('job.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::OrderDesc();
        $job = Job::findOrFail($id);
        return view('job.edit',compact(['categories','job']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateRuls(){

        return [
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'country' => 'required',
        ];
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,$this->updateRuls());

        Job::where('id',$id)->update([

            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'salary' => $request->salary,
            'country' => $request->country,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('job.index')->with('message','Job Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (JobApply::where('job_id',$id)->first()){
            return redirect()->back()->with('error','Job is not Deleted, Because this job already in use Job Apply.!');
        }

        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->back()->with('message','Job Deleted Successful');
    }
}
