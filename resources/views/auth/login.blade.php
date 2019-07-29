@extends('welcome')

@section('title','Applicant Login')

@section('css')

@endsection

@section('content')



    <section class="job-bg user-page">
        <div class="container  text-center">
            <div class="user-account-content">
                <div class="user-account job-user-account">

                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation"><a @if(request()->is('login')) class="active" @endif href="{{ route('login') }}">Find A Job</a></li>
                        <li role="presentation"><a href="{{ route('employer.login') }}">Post A Job</a></li>
                    </ul>

                    <div class="tab-content">

                        @if(session()->get('error'))

                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Error ! </strong> {{ session()->get('error') }}
                            </div>

                        @endif

                        <div role="tabpanel" class="tab-pane active show" id="find-job">

                            <h2>Applicant Login</h2>
                            <!-- form -->
                            <form action="{{ route('login') }}" method="post">
                                @csrf

                                <div class="form-group">

                                    <input type="text" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" >

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
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