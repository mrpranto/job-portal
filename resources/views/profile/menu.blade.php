<ul class="user-menu">
    <li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="{{ route('profile') }}">Account Info </a></li>
    <li class="{{ request()->is('view-resume') ? 'active' : '' }} "><a href="{{ route('view.resume') }}">View Resume</a></li>
    <li class="{{ request()->is('edit-resume') ? 'active' : '' }} "><a href="{{ route('edit.resume') }}">Edit Resume</a></li>
    <li class="{{ request()->is('applied-job') ? 'active' : '' }} "><a href="{{ route('applied.job') }}">Applied job</a></li>
</ul>