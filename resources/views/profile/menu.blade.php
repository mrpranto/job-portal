<ul class="user-menu">
    <li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="{{ route('profile') }}">Account Info </a></li>
    <li class="{{ request()->is('view-resume') ? 'active' : '' }} "><a href="{{ route('view.resume') }}">View Resume</a></li>
    <li class="{{ request()->is('edit-resume') ? 'active' : '' }} "><a href="{{ route('edit.resume') }}">Edit Resume</a></li>
    <li><a href="profile-details.html">Profile Details</a></li>
    <li><a href="bookmark.html">Bookmark</a></li>
    <li><a href="applied-job.html">applied job</a></li>
    <li><a href="delete-account.html">Close account</a></li>
</ul>