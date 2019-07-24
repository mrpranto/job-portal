@extends('welcome')

@section('title','Home')

@section('css')
    
@endsection

@section('content')



<section class="job-bg user-page">
    <div class="container  text-center">
        <div class="user-account-content">
            <div class="user-account job-user-account">
            
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation"><a class="active" href="#find-job" aria-controls="find-job" role="tab" data-toggle="tab">Find A Job</a></li>
                        <li role="presentation"><a href="#post-job" aria-controls="post-job" role="tab" data-toggle="tab">Post A Job</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active show" id="find-job">
                        
                                <h2>User Login</h2>
                                <!-- form -->
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" >
                                    </div>
                                    <button type="submit" href="#" class="btn">Login</button>
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
                        <div role="tabpanel" class="tab-pane" id="post-job">
                           
                            <h2>Employer Login</h2>

                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" >
                                    </div>
                                    <button type="submit" href="#" class="btn">Login</button>
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