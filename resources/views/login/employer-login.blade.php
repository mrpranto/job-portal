@extends('welcome')

@section('title','Employer Login')

@section('css')
    
@endsection

@section('content')



<section class="job-bg user-page">
    <div class="container  text-center">
        <div class="user-account-content">
            <div class="user-account job-user-account">
            
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation"><a href="{{ route('login') }}">Find A Job</a></li>
                        <li role="presentation"><a @if(request()->is('employer-login')) class="active" @endif href="{{ route('employer.login') }}">Post A Job</a></li>
                    </ul>

                    <div class="tab-content">


                        <div role="tabpanel">
                           
                            <h2>Employer Login</h2>

                            <form action="{{ route('employer.login') }}" method="post">
                                @csrf

                                <div class="form-group">

                                    <input type="text" name="email" class="form-control @if(session()->get('error')) is-invalid @endif" placeholder="Email" >

                                    @if(session()->get('error'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ session()->get('error') }}</strong>
                                            </span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" >

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif

                                </div>
                                <button type="submit" class="btn">Login</button>
                            </form><!-- form -->
                            
                                <!-- forgot-password -->
                                <div class="user-option">
                                    <div class="checkbox pull-left">
                                        <label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
                                    </div>
                                    <div class="pull-right forgot-password">
                                        <a href="#">Forgot password</a>
                                    </div>
                                </div><!-- forgot-password -->
                           
            
                        </div>
                    </div>				
            </div>
        </div><!-- user-login -->	
    </div><!-- container -->
</section><!-- signup-page -->



    
@endsection



@section('js')

    
@endsection