<nav class="nav flex-column sidebar rounded">
    <br class="my-2">
    <a class="nav-link {{ Route::is('account')?'active':'' }}" href="{{ route('account') }}">Dashboard</a>
    @if($glob_profile->status===2 || $glob_profile->status===3)
        <a class="nav-link {{ Route::is('apply')?'active':'' }}" href="{{ route('apply') }}">Apply</a>
    @endif
    <a class="nav-link {{ Route::is('upload')?'active':'' }}" href="#">Upload</a>
    <a class="nav-link {{ Route::is('download')?'active':'' }}" href="#">Download</a>
    <a class="nav-link {{ Route::is('appointment')?'active':'' }}" href="#">Appointment</a>
    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
    <br class="my-2">
</nav>
