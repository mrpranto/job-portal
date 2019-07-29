@extends("welcome")

@section("title", $job->title)


@section("page-title")


@endsection




@section("css")


@endsection


@section("content")



    <section class=" job-bg ad-details-page">
        <div class="container">
            <div class="breadcrumb-section">
                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Job Post </li>
                </ol><!-- breadcrumb -->
                <h2 class="title">Post Your Job</h2>
            </div><!-- banner -->


            <div class="job-details">

                @php
                    $jobApply = \App\Models\JobApply::where('job_id',$job->id)->where('applicant_id',auth()->id())->first();
                @endphp

                @if($jobApply)

                        <div class="section job-ad-item">
                            <div class="alert alert-heading">
                               <h3> <i class="fa fa-check"></i> Already Applied.</h3>
                            </div>
                        </div><!-- job-ad-item -->

                @endif

        <div class="section job-ad-item">
            @if($jobApply)
            <a href="{{ route('job.list') }}" style="float: right"><i class="fa fa-backward"></i> Back</a>
                @else
                <a href="{{ url()->previous() }}" style="float: right"><i class="fa fa-backward"></i> Back</a>
            @endif
            <div class="item-info">

                <div class="ad-info">
                    <span><span><a href="#" class="title">{{ $job->title }}</a></span> @ <a href="#"> {{ $job->category->name }}</a></span>
                    <div class="ad-meta">
                        <ul>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $job->location }} - <b>{{ $job->country }}</b></a></li>
                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $job->job_type }}</a></li>
                            <li><i class="fa fa-money" aria-hidden="true"></i>{{ $job->salary }}</li>
                            <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Posted: {{ $job->created_at->diffForHumans() }}</li>
                        </ul>
                    </div><!-- ad-meta -->
                </div><!-- ad-info -->
            </div><!-- item-info -->


            <div class="social-media">
                <div class="button">
                    <form action="{{ route('apply.job') }}" method="post">
                        @csrf
                        <input type="hidden" name="employer_id" value="{{ $job->employer_id }}">
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <input type="hidden" name="applicant_id" value="{{ auth()->id() }}">


                        @auth


                            @if($jobApply)


                                    <div class="alert alert-heading">
                                        <h3> <i class="fa fa-check"></i> Already Applied.</h3>
                                    </div>

                            @else
                                <button type="submit" class="btn btn-primary">Apply Now</button>

                            @endif



                            @else

                            <button type="submit" class="btn btn-primary">Apply Now</button>

                        @endauth

                    </form>

                </div>
            </div>
        </div><!-- job-ad-item -->



        <div class="job-details-info">
            <div class="row">
                <div class="col-sm-8">
                    <div class="section job-description">
                        <div class="description-info">
                            <h1>Description</h1>
                            <p><span>{{ $job->description }}</span></p>
                         </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section company-info">
                        <h1>Company Info</h1>
                        <ul>
                            <li>Compnay Name: <a href="#">{{ $job->employer->company_name }}</a></li>
                            <li>Address: {{ $job->location }} , {{ $job->country }}</li>
                            <li>Email: <a href="">{{ $job->employer->email }}</a></li>
                        </ul>
                        <ul class="share-social">
                            <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- job-details-info -->
    </div>

        </div>
    </section>




@endsection

@section("scripts")


@endsection