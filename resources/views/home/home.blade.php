@extends('welcome')

@section('title','Home')

@section('css')
    
@endsection

@section('content')



<div class="banner-job">
    <div class="banner-overlay"></div>
    <div class="container text-center">
        <h1 class="title">The Easiest Way to Get Your New Job</h1>
        <h3>We offer 12000 jobs vacation right now</h3>
        <div class="banner-form">
            <form action="#" class="clearfix">
                <input type="text" class="form-control" placeholder="Type your key word">
                <div class="dropdown category-dropdown">						
                    <a data-toggle="dropdown" href="#"><span class="change-text">Job Location</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change">
                        <li><a href="#">Location 1</a></li>
                        <li><a href="#">Location 2</a></li>
                        <li><a href="#">Location 3</a></li>
                    </ul>								
                </div><!-- category-change -->
                <button type="submit" class="btn btn-primary" value="Search">Search</button>
            </form>
        </div><!-- banner-form -->
        
        <ul class="banner-socail list-inline">
            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
        </ul><!-- banner-socail -->
    </div><!-- container -->
</div><!-- banner-section -->

<div class="page">
    <div class="container">
        <div class="section category-items job-category-items  text-center">
            <ul class="category-list">	

               @foreach($categories as $category)
                <li class="category-item col-sm-3">
                    <a href="">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/1.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">{{ $category->name }}</span>
                        <span class="category-quantity">({{ $category->jobs->count() }})</span>
                    </a>
                </li><!-- category-item -->
                @endforeach

            </ul>				
        </div><!-- category ad -->			

        <div class="section latest-jobs-ads">
            <div class="section-title tab-manu">
                <h4>Latest Jobs</h4>
                 <!-- Nav tabs -->      
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a class="active" href="#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
                </ul>
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


        <div class="section cta cta-two text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-jobs">
                            <img src="{{ asset('asset/images/icon/31.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>3,412</h3>
                        <h4>Live Jobs</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-company">
                            <img src="{{ asset('asset/images/icon/32.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>12,043</h3>
                        <h4>Total Company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-md-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-candidate">
                            <img src="{{ asset('asset/images/icon/33.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>5,798,298</h3>
                        <h4>Total Candidate</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->
            </div><!-- row -->
        </div><!-- cta -->			

    </div><!-- conainer -->
</div><!-- page -->



    
@endsection



@section('js')

    
@endsection