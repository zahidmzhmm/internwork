<ul class="navbar-nav ml-auto">
    <li class="nav__item with-dropdown">
        <a href="#" data-toggle="dropdown"
           class="dropdown-toggle nav__item-link {{ Route::is('index') || Route::is('about') || Route::is('privacy') || Route::is('home')?'active':'' }}">Home</a>
        <ul class="dropdown-menu">
            <li class="nav__item"><a href="{{ url('/home') }}" class="nav__item-link">Home</a>
            </li>
            <!-- /.nav-item -->
            <li class="nav__item"><a href="{{ url('/about') }}" class="nav__item-link">About</a>
            </li>
            <!-- /.nav-item -->
            <li class="nav__item"><a href="{{ url('/privacy') }}" class="nav__item-link">Privacy
                    Policy</a>
            </li>
            <!-- /.nav-item -->
        </ul><!-- /.dropdown-menu -->
    </li><!-- /.nav-item -->
    <li class="nav__item with-dropdown">
        <a href="#" data-toggle="dropdown"
           class="dropdown-toggle nav__item-link {{ Route::is('internships') || Route::is('traineeships') || Route::is('h1b') ? 'active':'' }}">Programs</a>
        <ul class="dropdown-menu">
            <li class="nav__item"><a href="{{ url('/internships') }}" class="nav__item-link">Internship</a>
            </li>
            <!-- /.nav-item -->
            <li class="nav__item"><a href="{{ url('/traineeships') }}" class="nav__item-link">Traineeship</a>
            </li>
            <!-- /.nav-item -->
            <li class="nav__item"><a href="{{ url('/h1b') }}" class="nav__item-link">H1-B</a>
            </li>
            <!-- /.nav-item -->
        </ul><!-- /.dropdown-menu -->
    </li><!-- /.nav-item -->
    <li class="nav__item with-dropdown">
        <a href="#" data-toggle="dropdown"
           class="dropdown-toggle nav__item-link {{ Route::is('register') || Route::is('login')|| Route::is('admin') || Route::is('admin.*') || Route::is('account.*') || Route::is('account') ? 'active':'' }}">
            {{ \Illuminate\Support\Facades\Auth::user()?\Illuminate\Support\Facades\Auth::user()->role==2?"Admin":"Applications":"Applications" }}
        </a>
        <ul class="dropdown-menu">
            @guest
                @if (\Illuminate\Support\Facades\Route::has('register'))
                    <li class="nav__item"><a href="{{ url('/register') }}"
                                             class="nav__item-link">New
                            Account</a></li>
                @endif

                @if (\Illuminate\Support\Facades\Route::has('login'))
                    <li class="nav__item"><a href="{{ url('/login') }}"
                                             class="nav__item-link">Login</a>
                    </li>
                @endif
            @else
                @if(\Illuminate\Support\Facades\Auth::user())
                    <li class="nav__item"><a href="{{ route('account') }}"
                                             class="nav__item-link">Account</a>
                    </li>
                    <li class="nav__item"><a href="{{ route('logout') }}"
                                             class="nav__item-link">Logout</a>
                    </li>
                @endif
            @endguest
        </ul><!-- /.dropdown-menu -->
    </li><!-- /.nav-item -->
    <li class="nav__item with-dropdown">
        <a href="" data-toggle="dropdown"
           class="dropdown-toggle nav__item-link {{ Route::is('contact') ? 'active':'' }}">Contact</a>
        <ul class="dropdown-menu">
            <li class="nav__item"><a href="{{ url('/contact') }}" class="nav__item-link">Contact
                    Us</a></li>
        </ul><!-- /.dropdown-menu -->
    </li><!-- /.nav-item -->
</ul>
