<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:employer')->except('logout');
    }

    public function register_form(){
        return view('register.employer-register');
    }



    public function rules(){

        return [

            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'business_name' => 'required|max:191',
            'company_name' => 'required|max:191',
            'email' => 'required|email|unique:employers,email',
            'password' => 'required',

        ];

    }


    public function processEmployerRegister(Request $request){

        $this->validate($request,$this->rules());

        Employer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'business_name' => $request->business_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('employer.login')->with('message','Registration Successful, You Can Login.');

    }


    public function login_form()
    {
        return view('login.employer-login');
    }

    public function processEmployerLogin(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->except('_token');

        if (auth()->guard('employer')->attempt($credentials)){
            return redirect()->intended(route('employer.dashboard'));
        }

        return redirect()->back()->with('error','These credentials do not match our records.');

    }


    public function logout(){

            Auth::guard('employer')->logout();
            return redirect('/')->with('message', 'Your Logout Successful');

    }

}
