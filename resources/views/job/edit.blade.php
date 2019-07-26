@extends("welcome")

@section("title","Edit Job")


@section("page-title")


@endsection




@section("css")


@endsection


@section("content")




    <section class=" job-bg ad-details-page">
        <div class="container">
            <div class="breadcrumb-section">
                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Job Post </li>
                </ol><!-- breadcrumb -->
                <h2 class="title">Post Your Job</h2>
            </div><!-- banner -->

            <div class="job-postdetails">
                <div class="row">
                    <div class="col-lg-10">
                        <form action="{{ route('job.update',$job->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <fieldset>
                                <div class="section postdetails">
                                    <h4>Post Your Job<span class="pull-right">* Mandatory Fields</span></h4>
                                    <div class="row form-group add-title">
                                        <label class="col-sm-3 label-title">Job Category<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select name="category" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}" id="">
                                                <option value="">- Select Category -</option>

                                                @foreach($categories as $category)
                                                    <option {{ $job->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select>

                                            @if ($errors->has('category'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3">Job Type<span class="required">*</span></label>
                                        <div class="col-sm-4">
                                            <select name="job_type" class="form-control {{ $errors->has('job_type') ? ' is-invalid' : '' }}">
                                                <option {{ $job->job_type == 'full-time' ? 'selected' : '' }} value="full-time">Full Time</option>
                                                <option {{ $job->job_type == 'part-time' ? 'selected' : '' }} value="part-time">Part Time</option>
                                            </select>

                                            @if ($errors->has('job_type'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('job_type') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>





                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Job Title<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $job->title }}">

                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="textarea" placeholder="Write few lines about your jobs" rows="14">{{ $job->description }}</textarea>

                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="row characters">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <p>5000 characters left</p>
                                        </div>
                                    </div>
                                    <div class="row form-group add-title location">
                                        <label class="col-sm-3 label-title">Location<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="location" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}" value="{{ $job->location }}">

                                            @if ($errors->has('location'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="row form-group add-title location">
                                        <label class="col-sm-3 label-title">Country<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="country" class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{ $job->country }}">

                                            @if ($errors->has('country'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="row form-group select-price">
                                        <label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <label>BDT. </label>
                                            <input type="text" name="salary" class="form-control {{ $errors->has('salary') ? ' is-invalid' : '' }}" placeholder="Salary" value="{{ $job->salary }}">


                                            @if ($errors->has('salary'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('salary') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>



                                </div><!-- postdetails -->


                                <div class="checkbox section agreement">

                                    <button type="submit" class="btn btn-info">Update Post</button>
                                    <a href="{{ route('job.index') }}" class="btn btn-danger">Back</a>
                                </div><!-- section -->

                            </fieldset>
                        </form><!-- form -->
                    </div>

                </div><!-- photos-ad -->
            </div>
        </div><!-- container -->
    </section><!-- main -->







@endsection

@section("scripts")


@endsection