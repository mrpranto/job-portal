<div class="job-profile section">
    <div class="user-profile">
        <div class="user-images">
            <img src="{{ asset('asset/images/user.jpg') }}" alt="User Images" class="img-fluid">
        </div>
        <div class="user">
            <h2>Hello, <a href="#">{{ auth()->user()->first_name .' '. auth()->user()->last_name }}</a></h2>
            <h5><b>{{ auth()->user()->company_name }}</b> - {{ auth()->user()->business_name }}</h5>
        </div>

    </div><!-- user-profile -->

    <ul class="user-menu">
        <li @if(request()->is('employer/dashboard')) class="active" @endif><a href="{{ route('employer.dashboard') }}">Account Info </a></li>
        <li @if(request()->is('employer/job')) class="active" @endif><a href="{{ route('job.index') }}">All Jobs</a></li>
        <li @if(request()->is('employer/applied-applicant')) class="active" @endif><a href="{{ route('employer.applied-applicant') }}">Applied Applicant</a></li>
    </ul>
</div><!-- ad-profile -->
