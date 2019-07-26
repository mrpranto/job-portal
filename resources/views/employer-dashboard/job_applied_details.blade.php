@extends("welcome")

@section("title",$jobAppliedDetails->title)


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
                <h2 class="title">{{ $jobAppliedDetails->title }} - Applied Information</h2>
            </div><!-- breadcrumb-section -->

            @include('employer-dashboard.header.header')

            <div class="resume-content">

                <div class="section">
                    <a href="{{ route('employer.applied-applicant') }}" style="float: right;" class="btn"> <i class="fa fa-backward"></i> Back</a>
                    <h3><b>{{ $jobAppliedDetails->title }}</b> - Applicant Information</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Applicant Name</th>
                                <th width="25%">Applicant Skill</th>
                                <th>Applied Date Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($jobAppliedDetails->job_applies as $key => $applicant)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $applicant->applicant->first_name .' '. $applicant->applicant->last_name }}</td>
                                    <td>{{  Str::limit($applicant->applicant->profile['skill'], 100) }}</td>
                                    <td>{{  \Carbon\Carbon::parse($applicant->created_at)->format('F d, Y H:s:A')  }}</td>
                                    <td>
                                        <a href="{{ route('employer.applicant',$applicant->applicant->id) }}">
                                            <i class="fa fa-eye"></i> view Applicant
                                        </a>
                                    </td>
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