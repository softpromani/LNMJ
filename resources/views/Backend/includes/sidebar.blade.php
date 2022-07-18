<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-80 img-radius" src="{{ asset('Frontend/images/icon/newlnmu.gif') }}"
                            alt="User-Profile-Image">
                        <div class="user-details">
                            <span id="more-details">LNMU ADMIN<i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>

                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                <a href="#!"><i class="ti-settings"></i>Settings</a>
                                <a href="#"><i class="ti-layout-sidebar-left"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 p-b-0">
                    <form class="form-material">
                        <div class="form-group form-primary">
                            <span class="form-bar"></span>
                        </div>
                    </form>
                </div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{ route('admin.notice') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                            <span class="pcoded-mtext">Notice</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{ route('admin.aqar') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                            <span class="pcoded-mtext">AQAR</span>
                        </a>
                    </li>
                </ul>

            </div>

        </nav>
