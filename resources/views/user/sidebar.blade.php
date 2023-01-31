<nav class="nav flex-column sidebar rounded">
    <br class="my-2">
    <a class="nav-link active" href="{{ route('account') }}">Dashboard</a>
    @if($glob_profile->status===2 || $glob_profile->status===3)
        <a class="nav-link" href="#">Apply</a>
    @endif
    <a class="nav-link" href="#">Upload</a>
    <a class="nav-link" href="#">Download</a>
    <a class="nav-link" href="{{ route('appointment') }}">Appointment</a>
    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
    <br class="my-2">
</nav>
