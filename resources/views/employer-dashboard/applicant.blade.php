@extends("welcome")

@section("title", $applicant->first_name .' '.$applicant->last_name)


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
                    <li>Employer Dashboard</li>
                </ol>
                <h2 class="title">Dashboard</h2>
            </div><!-- breadcrumb-section -->

            @include('employer-dashboard.header.header')

            <div class="resume-content">
                <div class="section">

                    <a href="{{ url()->previous() }}" style="float: right;" class="btn"> <i class="fa fa-backward"></i> Back</a>

                    <div class="personal-deatils section">
                        <div class="icons">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </div>
                        <div class="personal-info">
                            <h3>{{ $applicant->first_name .' '.$applicant->last_name }} - Deatils Information</h3>
                            <ul class="address">
                                <li><h5>Full Name </h5> <span>:</span>{{ $applicant->first_name .' '.$applicant->last_name }}</li>
                                <li><h5>Email</h5> <span>:</span>{{ $applicant->email }}</li>
                                <li><h5>Image</h5> <span></span>
                                        <img src="@if($applicant->profile->image == 'default.png'){{ asset('asset/uploads/default.png') }} @else {{ asset('uploads/image/'.$applicant->profile->image) }} @endif" width="100px" alt="User Images" class="img-fluid">
                                    </li>
                            </ul>
                        </div>
                    </div>

                </div><!-- profile -->

                <div class="section">

                    <div class="special-qualification: section">
                        <div class="icons">
                            <i class="fa fa-server" aria-hidden="true"></i>
                        </div>
                        <div class="qualification">
                            <h3>Skill:</h3>
                            <p><span>
                                  @if($applicant->profile) {{ $applicant->profile->skill }} @else Please Upgrade your skill..... @endif
                                </span></p>
                        </div>
                    </div>


                </div><!-- profile -->

                <div class="section">

                    <div class="special-qualification: section">
                        <div class="icons">
                            <i class="fa fa-info" aria-hidden="true"></i>
                        </div>
                        <div class="qualification">
                            <h3>Resume :</h3>

                            @if($applicant->profile)

                                @if(substr($applicant->profile->resume,-4) == 'docx')

                                    <a href="{{ asset('uploads/resume/'.$applicant->profile->resume) }}" class="btn btn-primary"> <i class="fa fa-download"></i> Download Resume</a>
                                    <br>
                                    <span class="text-dark">This Resume is Docx file. It's Download first than open it.</span>


                                @else

                                    {{--@if(auth()->user()->profile->resume == 'default.pdf') {{ asset('asset/uploads/default.pdf') }} @else  {{ asset('uploads/resume/'.auth()->user()->profile->resume) }} @endif--}}

                                    <iframe src="@if($applicant->profile->resume == 'default.pdf') {{ asset('asset/uploads/default.pdf') }} @else  {{ asset('uploads/resume/'.$applicant->profile->resume) }} @endif" width="100%" height="500px">
                                    </iframe>

                                @endif

                            @else

                                <span class="text-danger">You are not uploaded yet your resume .</span>


                            @endif
                        </div>
                    </div>


                </div><!-- profile -->


            </div><!-- resume-content -->
        </div><!-- container -->
    </section><!-- ad-profile-page -->








@endsection

@section("scripts")


@endsection