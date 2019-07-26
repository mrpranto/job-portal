@extends("welcome")

@section("title",auth()->user()->company_name)


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
                <div class="profile section clearfix">
                    <div class="profile-info">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>Name : <b>{{ auth()->user()->first_name .' '. auth()->user()->last_name}}</b></p>
                                    <p>Email : <b>{{ auth()->user()->email }}</b> </p>
                                    <p>Company Name : <b>{{ auth()->user()->company_name }}</b></p>
                                    <p>Business Name : <b>{{ auth()->user()->business_name }}</b> </p>
                                </td>
                                <td class="text-center">
                                    <h2>Total Job</h2>
                                    <h2><a href="{{ route('job.index') }}">{{ $totalJobs }}</a></h2>
                                </td>
                                <td class="text-center">
                                    <h2>Total Applicant</h2>
                                    <h2><a href="{{ route('employer.applied-applicant') }}">{{ $totalApply }}</a></h2>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div><!-- profile -->

            </div><!-- resume-content -->
        </div><!-- container -->
    </section><!-- ad-profile-page -->






@endsection

@section("js")


@endsection