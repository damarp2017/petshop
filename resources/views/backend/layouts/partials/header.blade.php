<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <b>
                    {{--You can put here icon as well // <i class="wi wi-sunset"></i>--}}
                    {{--Dark Logo icon--}}
                    <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo"/>
                    {{--Light Logo icon--}}
                    <img src="{{ asset('backend/assets/images/logo-light-icon.png') }}" alt="homepage"
                         class="light-logo"/>
                </b>

                {{--Logo text--}}
                <span>
                        {{--dark Logo text--}}
                    <img src="{{ asset('backend/assets/images/logo-text.png') }}" alt="homepage" class="dark-logo"/>
                    {{--Light Logo text    --}}
                    <img src="{{ asset('backend/assets/images/logo-light-text.png') }}" class="light-logo"
                         alt="homepage"/></span> </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                       href="javascript:void(0)">
                        <i class="mdi mdi-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                       href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('backend/assets/images/users/1.jpg') }}" alt="user" class="profile-pic"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <img src="{{ asset('backend/assets/images/users/1.jpg') }}" alt="user">
                                    </div>
                                    <div class="u-text">
                                        <h4>Steave Jobs</h4>
                                        <p class="text-muted">varun@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>