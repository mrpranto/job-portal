@extends("welcome")

@section("title","All jobs")


@section("page-title")


@endsection




@section("css")


@endsection


@section("content")


    <br>
    <br>


    <div class="page">
        <div class="container">

            <div class="section latest-jobs-ads">
                <div class="section-title tab-manu">
                    <h4>Latest Jobs</h4>
                </div>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active show" id="recent-jobs">

                        @foreach($jobs as $job)

                            <div class="job-ad-item">
                                <div class="item-info">
                                    <div class="item-image-box">
                                        <div class="item-image">
                                            <a href="{{ route('job.details',$job->id) }}"><img src="{{ asset('asset/images/job/4.png') }}" alt="Image" class="img-fluid"></a>
                                        </div><!-- item-image -->
                                    </div>

                                    <div class="ad-info">
                                        <span><a href="{{ route('job.details',$job->id) }}" class="title">{{ $job->title }}</a> @ <a href="#">{{ $job->employer->company_name }}</a></span>
                                        <div class="ad-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $job->country }}</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $job->job_type }}</a></li>
                                                <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>{{ $job->salary }}</a></li>
                                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Posted: {{ $job->created_at->diffForHumans() }}</a></li>
                                            </ul>
                                        </div><!-- ad-meta -->
                                    </div><!-- ad-info -->
                                    <div class="button">
                                        <a href="{{ route('job.details',$job->id) }}" class="btn btn-primary">Details</a>
                                    </div>
                                </div><!-- item-info -->
                            </div><!-- ad-item -->

                        @endforeach

                    </div><!-- tab-pane -->


                </div><!-- tab-content -->
            </div><!-- trending ads -->

            {{ $jobs->links() }}


        </div><!-- conainer -->
    </div><!-- page -->







@endsection

@section("scripts")


@endsection