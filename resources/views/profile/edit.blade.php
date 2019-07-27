@extends("welcome")

@section("title", 'Edit Resume')


@section("page-title")


@endsection




@section("css")


@endsection


@section("content")




    <section class=" job-bg page  ad-profile-page">
        <div class="container">
            <div class="breadcrumb-section">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Applicant Profile</li>
                </ol>
                <h2 class="title">My Profile</h2>
            </div><!-- breadcrumb-section -->

            <div class="job-profile section">
                @include('profile.header')

                @include('profile.menu')

            </div><!-- ad-profile -->

            <div class="adpost-details post-resume">
                <div class="row">

                    <div class="col-lg-10">
                        <form action="@if(auth()->user()->profile) {{ route('updated.resume') }} @else {{ route('add.resume') }} @endif" method="post" enctype="multipart/form-data">

                            @csrf

                            <fieldset>
                                <div class="section postdetails">
                                    <h4>Edit Your Resume<span class="pull-right">* Mandatory Fields</span></h4>


                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title">Skill<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea name="skill" class="form-control {{ $errors->has('skill') ? ' is-invalid' : '' }}" id="textarea" placeholder="Skill...." rows="14">@if(auth()->user()->profile){{ auth()->user()->profile->skill }} @else {{ old('skill') }} @endif </textarea>

                                            @if ($errors->has('skill'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('skill') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title">Image<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">

                                            @if ($errors->has('image'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    
                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title"></label>
                                        <div class="col-sm-9">
                                            @if(auth()->user()->profile)
                                                <img src="@if(auth()->user()->profile->image == 'default.png') {{ asset('asset/uploads/default.png') }} @else {{ asset('uploads/image/'.auth()->user()->profile->image) }} @endif " width="100px" alt="">
                                            @else
                                                <img class="img-fluid" src="{{ asset('asset/images/user.jpg') }}" width="140px" alt="Image">
                                            @endif

                                                @if ($errors->has('image'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title">Resume<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control {{ $errors->has('resume') ? ' is-invalid' : '' }}" name="resume">

                                            @if(auth()->user()->profile)
                                                @if(auth()->user()->profile->resume)
                                                    <span class="text-danger"> You have already upload your resume, If you change your resume you can upload again . </span>
                                                @endif
                                            @endif

                                            @if ($errors->has('resume'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('resume') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>



                                </div><!-- postdetails -->


                                <div class="checkbox section agreement">

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i> Update
                                    </button>
                                </div><!-- section -->

                            </fieldset>
                        </form><!-- form -->
                    </div>

                    <!-- quick-rules -->

                </div><!-- photos-ad -->
            </div>

        </div><!-- container -->
    </section><!-- ad-profile-page -->











@endsection

@section("scripts")


@endsection