<header id="header" class="clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('asset/images/logo.png') }}" alt="Logo"></a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('job.list') }}">Job list</a></li>

                    @if(request()->segment(1) != 'employer' and auth()->id())
                    <li><a href="{{ route('view.resume') }}">Resume</a></li>
                    @endif

                </ul>
            </div>
            
            <!-- nav-right -->
            <div class="nav-right">


                    @auth

                        <ul class="sign-in">
                            <li><i class="fa fa-user"></i></li>

                            @if(Request::segment(1) == 'employer')
                                <li><a href="{{ route('employer.dashboard') }}">{{ auth()->user()->first_name .' '. auth()->user()->last_name}}</a></li>
                                <li><i class="fa fa-sign-out"></i><a href="{{ route('employer.logout') }}">Logout</a></li>
                            @else
                                <li><a href="{{ route('profile') }}">{{ auth()->user()->first_name .' '. auth()->user()->last_name}}</a></li>
                                <li><i class="fa fa-sign-out"></i><a href="{{ route('applicant.logout') }}">Logout</a></li>
                            @endif

                        </ul><!-- sign-in -->

                        @if(Request::segment(1) == 'employer')

                        <a href="{{ route('job.create') }}" @auth @else target="_blank" @endauth class="btn">Post Your Job</a>

                         @endif

                    @else

                        <ul class="sign-in">
                            <li><i class="fa fa-user"></i></li>
                            <li><a href="{{ route('login') }}">Sign In</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul><!-- sign-in -->

                    <a href="{{ route('employer.dashboard') }}" target="_blank" class="btn">Post Your Job</a>

                    @endauth




            </div>
            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header><!-- header -->
