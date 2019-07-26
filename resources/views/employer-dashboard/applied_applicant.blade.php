@extends("welcome")

@section("title","All Applicant")


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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Job Title</th>
                                <th>Total Applied</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($applicantApplieds->count() > 0)
                            @foreach($applicantApplieds as $key => $applicantApplied)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $applicantApplied->job->title }}</td>
                                    <td>{{ \App\Models\JobApply::where('job_id',$applicantApplied->job_id)->count() }}</td>
                                    <td>
                                        <a href="{{ route('employer.job-applied-details',$applicantApplied->job_id) }}" class="btn btn-info" title="View Details">
                                            <i class="fa fa-eye"></i> View Details
                                        </a>
                                    </td>
                                </tr>

                            @endforeach


                            @else

                                <tr>
                                    <td colspan="4" class="text-center"> No Data is available ! </td>
                                </tr>

                            @endif

                            </tbody>
                        </table>

                        {{ $applicantApplieds->links() }}

                    </div>
                </div><!-- profile -->


            </div><!-- resume-content -->
        </div><!-- container -->
    </section><!-- ad-profile-page -->








@endsection

@section("scripts")


@endsection