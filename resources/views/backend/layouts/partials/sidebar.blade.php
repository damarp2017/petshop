<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile"
             style="background: url({{ asset('backend//assets/images/background/user-info.jpg') }}) no-repeat;">
            <div class="profile-img"><img src="{{ asset('backend/assets/images/users/1.jpg') }}" alt="user"/>
            </div>
            <div class="profile-text">
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button"
                   aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">&ensp;Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.food') }}" aria-expanded="false"><i class="mdi mdi-food-variant"></i><span class="hide-menu">&ensp;Food</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.medicine') }}" aria-expanded="false"><i class="mdi mdi-medical-bag"></i><span class="hide-menu">&ensp;Medicine</span></a>
                </li>
                <li>
                    <a href="#" aria-expanded="false"><i class="fa fa-dollar"></i><span class="hide-menu">&ensp;PetShop</span></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>