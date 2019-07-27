<div class="user-profile">
    <div class="user-images">

        @if(auth()->user()->profile)
            <img class="img-fluid" src="@if(auth()->user()->profile->image == 'default.png') {{ asset('asset/uploads/default.png') }} @else {{ asset('uploads/image/'.auth()->user()->profile->image) }} @endif " width="80px" alt="Image">
        @else
            <img class="img-fluid" src="{{ asset('asset/images/user.jpg') }}" width="80px" alt="Image">
        @endif

    </div>
    <div class="user">
        <h2>Hello, <a href="#">{{ auth()->user()->first_name .' '. auth()->user()->last_name }}</a></h2>
        <h5>Account Created at : {{ \Carbon\Carbon::parse(auth()->user()->created_at)->format('F d, Y H:i:A') }}</h5>
    </div>

    <div class="favorites-user">
        <div class="favorites">
            <a href="{{ route('applied.job') }}">{{ \App\Models\JobApply::where('applicant_id',auth()->id())->count() }}<small>Apply Job</small></a>
        </div>
    </div>
</div><!-- user-profile -->