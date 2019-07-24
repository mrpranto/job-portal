@extends('welcome')

@section('title','Home')

@section('css')
    
@endsection

@section('content')


<section class="job-bg user-page">
    <div class="container  text-center">
        <div class="user-account-content">
            <div class="user-account job-user-account">
                <h2>Create An Account</h2>
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation"><a class="active" href="#find-job" aria-controls="find-job" role="tab" data-toggle="tab">Find A Job</a></li>
                        <li role="presentation"><a href="#post-job" aria-controls="post-job" role="tab" data-toggle="tab">Post A Job</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active show" id="find-job">
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" >
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Id">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                </div>
                                <!-- select -->
                                <select class="form-control">
                                    <option value="#">Select City</option>
                                    <option value="#">London UK</option>
                                    <option value="#">Newyork, USA</option>
                                    <option value="#">Seoul, Korea</option>
                                    <option value="#">Beijing, China</option>
                                </select><!-- select -->

                                <div class="checkbox">
                                    <label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
                                </div><!-- checkbox -->	
                                <button type="submit" class="btn">Registration</button>	
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="post-job">
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Employer Name" >
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Id">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contact Number">
                                </div>
                                <div class="checkbox">
                                    <label class="pull-left checked" for="signing-2"><input type="checkbox" name="signing-2" id="signing-2">By signing up for an account you agree to our Terms and Conditions</label>
                                </div><!-- checkbox -->	
                                <button type="submit" class="btn">Registration</button>	
                            </form>
                        </div>
                    </div>				
            </div>
        </div><!-- user-login -->	
    </div><!-- container -->
</section><!-- signup-page -->


    
@endsection



@section('js')

    
@endsection