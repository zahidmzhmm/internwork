<nav class="nav flex-column sidebar rounded">
    <br class="my-2">
    <a class="nav-link {{ Route::is('account')?'active':'' }}" href="{{ route('account') }}">Dashboard</a>
    @if($glob_profile->status==2 || $glob_profile->status==3)
        <a class="nav-link {{ Route::is('apply') || Route::is('payment')?'active':'' }}"
           href="{{ $glob_profile->status==2?route('apply'):"#" }}" {{ $glob_profile->status==3?"data-toggle=modal data-target=#exampleModal":"" }}>Apply</a>
    @endif
    <a class="nav-link {{ Route::is('user.upload')?'active':'' }}" href="{{ route('user.upload') }}">Upload</a>
    <a class="nav-link {{ Route::is('user.download')?'active':'' }}" href="{{ route('user.download') }}">Download</a>
    <a class="nav-link {{ Route::is('user.appointment')?'active':'' }}" href="{{ route('user.appointment') }}">Appointment</a>
    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
    <br class="my-2">
</nav>
