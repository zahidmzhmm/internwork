<ul class="navbar-nav ml-auto">
    <li class="nav__item">
        <a href="{{ route('admin') }}"
           class="nav__item-link {{ Route::is('admin')?'active':'' }}">Admin</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.registrations') }}"
                             class="nav__item-link {{ Route::is('admin.registrations')?'active':'' }}">Registration</a>
    </li>
    <li class="nav__item with-dropdown">
        <a href="#" data-toggle="dropdown"
           class="dropdown-toggle nav__item-link {{ Route::is('admin.applications')?'active':'' }}">Applications</a>
        <ul class="dropdown-menu">
            <li class="nav__item"><a href="{{ url('/admin/applications?cat=Internship') }}" class="nav__item-link">Internship</a>
            </li>
            <!-- /.nav-item -->
            <li class="nav__item"><a href="{{ url('/admin/applications?cat=Traineeship') }}" class="nav__item-link">Traineeship</a>
            </li>
            <!-- /.nav-item -->
            <li class="nav__item"><a href="{{ url('/admin/applications?cat=H1B') }}" class="nav__item-link">H1-B</a>
            </li>
            <!-- /.nav-item -->
        </ul><!-- /.dropdown-menu -->
    </li><!-- /.nav-item -->
    </li>
    <li class="nav__item"><a href="{{ route('admin.appointment.list') }}"
                             class="nav__item-link {{ Route::is('admin.appointment.list')?'active':'' }}">Appointment
            List</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.duration') }}"
                             class="nav__item-link {{ Route::is('admin.duration')?'active':'' }}">Duration</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.coupon') }}"
                             class="nav__item-link {{ Route::is('admin.coupon')?'active':'' }}">Coupon</a>
    </li>
    <li class="nav__item"><a href="{{ route('admin.change.password') }}"
                             class="nav__item-link {{ Route::is('admin.change.password')?'active':'' }}">Change
            Password</a>
    </li>
    <li class="nav__item"><a href="{{ route('logout') }}" class="nav__item-link">Logout</a>
    </li>
</ul>
