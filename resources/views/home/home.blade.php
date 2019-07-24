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
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/1.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Accounting/Finance</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/2.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Education/Training</span>
                        <span class="category-quantity">(76212)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/3.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Engineer/Architects</span>
                        <span class="category-quantity">(212)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/4.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Garments/Textile</span>
                        <span class="category-quantity">(972)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/5.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">HR/Org. Development</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/6.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Design/Creative</span>
                        <span class="category-quantity">(76212)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/7.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Research/Consultancy</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/8.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Medical/Pharma</span>
                        <span class="category-quantity">(76212)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/9.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Music & Arts</span>
                        <span class="category-quantity">(212)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/10.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Marketing/Sales</span>
                        <span class="category-quantity">(1298)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/11.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Production/Operation</span>
                        <span class="category-quantity">(124)</span>
                    </a>
                </li><!-- category-item -->
                
                <li class="category-item">
                    <a href="job-list.html">
                        <div class="category-icon"><img src="{{ asset('asset/images/icon/12.png') }}" alt="images" class="img-fluid"></div>
                        <span class="category-title">Miscellaneous</span>
                        <span class="category-quantity">(972)</span>
                    </a>
                </li><!-- category-item -->					
            </ul>				
        </div><!-- category ad -->			

        <div class="section latest-jobs-ads">
            <div class="section-title tab-manu">
                <h4>Latest Jobs</h4>
                 <!-- Nav tabs -->      
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#hot-jobs" data-toggle="tab">Hot Jobs</a></li>
                    <li role="presentation"><a href="#recent-jobs" data-toggle="tab">Recent Jobs</a></li>
                    <li role="presentation"><a class="active" href="#popular-jobs" data-toggle="tab">Popular Jobs</a></li>
                </ul>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in" id="hot-jobs">
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/3.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/1.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	
                
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/2.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/4.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->
                </div><!-- tab-pane -->

                <div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
                
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/2.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/1.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/4.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->						
                
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/3.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	
                </div><!-- tab-pane -->

                <div role="tabpanel" class="tab-pane fade in active show" id="popular-jobs">
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/1.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	
                
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/2.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	
                
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/3.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->	

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{ asset('asset/images/job/4.png') }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                    </ul>
                                </div><!-- ad-meta -->									
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->
                </div><!-- tab-pane -->
            </div><!-- tab-content -->
        </div><!-- trending ads -->		

        <div class="ad-section text-center">
            <a href="#"><img src="{{ asset('asset/images/ads/3.jpg') }}" alt="Image" class="img-fluid"></a>
        </div><!-- ad-section -->

        <div class="section workshop-traning">
            <div class="section-title">
                <h4>Workshop Traning</h4>
                <a href="#" class="btn btn-primary">See all</a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="workshop">
                        <img src="{{ asset('asset/images/job/5.png') }}" alt="Image" class="img-fluid">
                        <h3><a href="#">Business Process Management Training</a></h3>
                        <h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
                        <div class="workshop-price">
                            <h5>Course instructor: Kim Jon ley</h5>
                            <h5>Course Amount: $200</h5>
                        </div>
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>
                            <div class="user-option pull-right">
                                <a href="#"><i class="fa fa-map-marker"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="workshop">
                        <img src="{{ asset('asset/images/job/6.png') }}" alt="Image" class="img-fluid">
                        <h3><a href="#">Employee Motivation and Engagement</a></h3>
                        <h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
                        <div class="workshop-price">
                            <h5>Course instructor: Kim Jon ley</h5>
                            <h5>Course Amount: $200</h5>
                        </div>
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>
                            <div class="user-option pull-right">
                                <a href="#"><i class="fa fa-map-marker"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- workshop-traning -->

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