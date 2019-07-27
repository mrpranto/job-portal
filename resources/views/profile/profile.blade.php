@extends("welcome")

@section("title",auth()->user()->first_name .' '. auth()->user()->last_name)


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

            <div class="resume-content">


                <div class="profile section clearfix">

                    @if(session()->get('error'))
                        <div class="alert alert-danger"> <i class="fa fa-times"></i> Error ! {{ session()->get('error') }}</div>
                    @endif

                    <div class="profile-logo">
                        @if(auth()->user()->profile)
                            <img class="img-fluid" src="@if(auth()->user()->profile->image == 'default.png') {{ asset('asset/uploads/default.png') }} @else {{ asset('uploads/image/'.auth()->user()->profile->image) }} @endif " width="140px" alt="Image">
                        @else
                            <img class="img-fluid" src="{{ asset('asset/images/user.jpg') }}" width="140px" alt="Image">
                        @endif


                    </div>
                    <div class="profile-info">
                        <h1>{{ auth()->user()->first_name .' '. auth()->user()->last_name }}</h1>
                        <address>
                            <p>
                                <br> Email: {{ auth()->user()->email }}
                            </p>
                        </address>
                    </div>
                </div><!-- profile -->


            </div><!-- resume-content -->
        </div><!-- container -->
    </section><!-- ad-profile-page -->






@endsection

@section("js")


@endsection