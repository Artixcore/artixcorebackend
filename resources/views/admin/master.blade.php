<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Admin</title>

    @yield('script_seo')

    <!-- Animated css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/animate.css') }}">
    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/bootstrap/bootstrap-icons.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">
    <!-- Data Tables -->
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


    @yield('style_css')

</head>

<body>
    <div id="loading-wrapper">
        <div class="spinner">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <div class="line4"></div>
            <div class="line5"></div>
            <div class="line6"></div>
        </div>
    </div>

    <div class="page-wrapper">

        <nav class="sidebar-wrapper">

            <!-- Sidebar brand starts -->
            <div class="sidebar-brand">
                <a href="index.html" class="logo">
                    <img src="assets/images/logo.svg" alt="Admin Dashboards" />
                </a>
            </div>
            <!-- Sidebar brand starts -->

            <!-- Sidebar menu starts -->
            <div class="sidebar-menu">
                <div class="sidebarMenuScroll">
                    <ul>
                        <li class="active">
                            <a href="{{ route('home') }}">
                                <i class="bi bi-house"></i>
                                <span class="menu-text">Dashboards</span>
                            </a>

                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-handbag"></i>
                                <span class="menu-text">Pages</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{ route('home.create') }}">Home Page</a></li>
                                    <li><a href="{{ route('workwith.create') }}">Work with Page</a></li>
                                    <li><a href="{{ route('service.index') }}">Service</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-gem"></i>
                                <span class="menu-text">Widgets</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="widgets.html">Widgets</a>
                                    </li>
                                    <li>
                                        <a href="graph-widgets.html">Graph Widgets</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-collection"></i>
                                <span class="menu-text">UI Elements</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="accordions.html">Accordions</a>
                                    </li>
                                    <li>
                                        <a href="alerts.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="badges.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="cards.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="carousel.html">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="dropdowns.html">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="icons.html">Icons</a>
                                    </li>
                                    <li>
                                        <a href="modals.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="offcanvas.html">Off Canvas</a>
                                    </li>
                                    <li>
                                        <a href="progress.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="spinners.html">Spinners</a>
                                    </li>
                                    <li>
                                        <a href="tabs.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="tooltips.html">Tooltips</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-stickies"></i>
                                <span class="menu-text">Pages</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="account-settings.html">Account Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="bi bi-calendar4"></i>
                                <span class="menu-text">Calendar</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-columns-gap"></i>
                                <span class="menu-text">Forms</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="form-inputs.html">Form Inputs</a>
                                    </li>
                                    <li>
                                        <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                                    </li>
                                    <li>
                                        <a href="form-file-input.html">File Input</a>
                                    </li>
                                    <li>
                                        <a href="form-validations.html">Validations</a>
                                    </li>
                                    <li>
                                        <a href="bs-select.html">Bootstrap Select</a>
                                    </li>
                                    <li>
                                        <a href="date-time-pickers.html">Date Time Pickers</a>
                                    </li>
                                    <li>
                                        <a href="input-mask.html">Input Masks</a>
                                    </li>
                                    <li>
                                        <a href="editor.html">Editor</a>
                                    </li>
                                    <li>
                                        <a href="form-layout1.html">Form Layout</a>
                                    </li>
                                    <li>
                                        <a href="form-layout2.html">Form Layout 2</a>
                                    </li>
                                    <li>
                                        <a href="form-layout3.html">Form Layout 3</a>
                                    </li>
                                    <li>
                                        <a href="form-layout4.html">Form Horizontal</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-window-split"></i>
                                <span class="menu-text">Tables</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="tables.html">Tables</a>
                                    </li>
                                    <li>
                                        <a href="data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-pie-chart"></i>
                                <span class="menu-text">Graphs &amp; Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="apex.html">Apex</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris</a>
                                    </li>
                                    <li>
                                        <a href="maps.html">Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-layout-sidebar"></i>
                                <span class="menu-text">Layouts</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="layout.html">Default Layout</a>
                                    </li>
                                    <li>
                                        <a href="layout-grid.html">Grid Layout</a>
                                    </li>
                                    <li>
                                        <a href="layout-welcome.html">Welcome Layout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-x-diamond"></i>
                                <span class="menu-text">Authentication</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="signup.html">Signup</a>
                                    </li>
                                    <li>
                                        <a href="error.html">Error</a>
                                    </li>
                                    <li>
                                        <a href="maintenance.html">Maintenance</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="starter-page.html">
                                <i class="bi bi-hand-index-thumb"></i>
                                <span class="menu-text">Link</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar menu ends -->

        </nav>

        <div class="main-container">

            <!-- Page header starts -->
            <div class="page-header">


                <!-- Header actions ccontainer start -->
                <div class="header-actions-container">

                    <!-- Header actions start -->
                    <ul class="header-actions">
                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                                aria-haspopup="true">
                                <span class="user-name d-none d-md-block">{{ Auth::user()->name }}</span>
                                <span class="avatar">
                                    <img src="{{ asset('admin/assets/images/user.png') }}" alt="Admin Templates">
                                    <span class="status online"></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                                <div class="header-profile-actions">
                                    <a href="profile.html">Profile</a>
                                    <a href="account-settings.html">Settings</a>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Header actions end -->

                </div>
                <!-- Header actions ccontainer end -->

            </div>
            <!-- Page header ends -->

            @yield('content')

        </div>

    </div>

    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    @yield('footer_js')
</body>

</html>
