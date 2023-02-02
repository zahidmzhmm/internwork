<ul class="navbar-nav ml-auto">
    <li class="nav__item">
        <a href="{{ route('admin') }}"
           class="nav__item-link {{ Route::is('admin')?'active':'' }}">Admin</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.registrations') }}"
                             class="nav__item-link {{ Route::is('admin.registrations')?'active':'' }}">Registration</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.applications') }}"
                             class="nav__item-link {{ Route::is('admin.applications')?'active':'' }}">Applications</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.appointment.list') }}"
                             class="nav__item-link {{ Route::is('admin.appointment.list')?'active':'' }}">Appointment
            List</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.duration') }}"
                             class="nav__item-link {{ Route::is('admin.duration')?'active':'' }}">Duration</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.change.password') }}"
                             class="nav__item-link {{ Route::is('admin.change.password')?'active':'' }}">Change
            Password</a>
    </li>
    <li class="nav__item"><a href="{{ route('logout') }}" class="nav__item-link">Logout</a>
    </li>
</ul>
