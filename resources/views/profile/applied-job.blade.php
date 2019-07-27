@extends("welcome")

@section("title","Applied Jobs")


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
                <div class="section">

                    <div class="personal-deatils section">
                        <h3>Applied Job</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Job Title</th>
                                    <th>Salary</th>
                                    <th>Location</th>
                                    <th>Company Name</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($appliedJobs as $key => $appliedJob)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $appliedJob->job->title }}</td>
                                    <td>{{ $appliedJob->job->salary }}</td>
                                    <td>{{ $appliedJob->job->location }}</td>
                                    <td>{{ $appliedJob->employer->company_name }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                </div><!-- profile -->


            </div><!-- resume-content -->
        </div><!-- container -->
    </section><!-- ad-profile-page -->












@endsection

@section("scripts")


@endsection