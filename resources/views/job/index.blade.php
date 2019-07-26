@extends("welcome")

@section("title","All Jobs")


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
                                <th>Category</th>
                                <th>Job Title</th>
                                <th>Salary</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th style="width: 30%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($jobs->count() > 0)
                                @foreach($jobs as $key => $job)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $job->category->name }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->salary }}</td>
                                        <td>{{ $job->country }}</td>
                                        <td>
                                            @if($job->status == 1)
                                                <span class="badge badge-success">Published</span>
                                            @else
                                                <span class="badge badge-danger" style="color: white;background-color: red;">Un-Published</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="buttons pull-right">

                                                @if($job->status == 1)
                                                    <a href="{{ route('employer.job.un-publish',$job->id) }}" class="btn" title="Un-publish">
                                                        <i class="fa fa-thumbs-o-down"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('employer.job.publish',$job->id) }}" class="btn" title="Publish">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                    </a>
                                                @endif


                                                <a href="{{ route('job.show',$job->id) }}" class="btn" title="View Job Details">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('job.edit',$job->id) }}" class="btn" title="Edit">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>

                                                    <a class="btn" title="Delete" onclick="formSubmit('{{ $job->id }}')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <form action="{{ route('job.destroy',$job->id) }}" id="deleteForm_{{ $job->id }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                    </form>


                                @endforeach

                            @else

                                <tr>
                                    <td colspan="7" class="text-center"> No Data is available ! </td>
                                </tr>

                            @endif

                            </tbody>
                        </table>

                        {{ $jobs->links() }}

                    </div>
                </div><!-- profile -->


            </div><!-- resume-content -->
        </div><!-- container -->
    </section><!-- ad-profile-page -->








@endsection

@section("js")

    <script>
        function formSubmit(id)
        {
            swal({
                title: "Are you sure ?",
                text: "You want to delete this data ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it.",
                cancelButtonText: "No, cancel it.",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm) {
                if (isConfirm) {
                    $('#deleteForm_'+id).submit();;
                }
            });
        }
    </script>

@endsection