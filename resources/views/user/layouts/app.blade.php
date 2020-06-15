@php    
    $currentUrl = url()->current();
@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('admin/assets/img/favicon.ico') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts and icons -->
    <script src="{{ asset('admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('admin/assets/css/fonts.min.css') }}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <!-- <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
    
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('common/vendor/datatable/datatables.min.css') }}">

    <!-- X Editable CSS -->
    <link rel="stylesheet" href="{{ asset('common/vendor/x-editable/css/bootstrap-editable.css') }}">

    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{ asset('common/vendor/select2/css/select2.min.css') }}">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('common/vendor/daterangepicker/daterangepicker.css') }}">

    <!-- Image Picker CSS -->
    <link rel="stylesheet" href="{{ asset('common/vendor/fileinput/css/jasny-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/atlantis.css') }}">

    <link rel="stylesheet" href="{{ asset('common/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    @stack("css")

</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header text-center" data-background-color="blue">
                
                <a href="#" class="logo">
                    <img src="" alt="navbar brand" class="navbar-brand w-50">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">0</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 0 new notification</div>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4></h4>
                                                <p class="text-muted"></p>
                                                <a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">           
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content" style="float:left !important;">
                    <ul class="nav nav-primary">
                    <li class="nav-item @if($currentUrl == route("user.dashboard")) active @endif">
                            <a href="{{route ('user.dashboard') }}">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item   @if($currentUrl == route("user.rlc") || $currentUrl == route("user.sm") ) active submenu @endif">
                            <a data-toggle="collapse" href="#module">
                                <i class="fas fa-building"></i>
                                <p>Resource Learning Center</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse @if($currentUrl == route("user.rlc") || $currentUrl == route("user.sm")) show @endif " id="module">
                                <ul class="nav nav-collapse">
                                    <li class="@if($currentUrl == route("user.rlc")) active @endif">
                                        <a href="{{route ('user.rlc')}}">
                                        <i class="fas fa-book"></i>   
                                            <p>Resource Learning Center</p>
                                        </a>
                                    </li>
                                    <li class=" @if($currentUrl == route("user.sm")) active @endif ">
                                        <a href="{{route('user.sm')}}">
                                        <i class="fas fa-book"></i> 
                                            <p>Success Manual</p>     
                                        </a>
                                    </li>
                                     <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-book"></i>  
                                            <p>FAQ</p>    
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#module1">
                                <i class="fas fa-star"></i>
                                <p>Marketing Tools</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse  " id="module1">
                                <ul class="nav nav-collapse">
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-book"></i>   
                                            <p>View Marketing Tools</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{route ('user.create_note') }}">
                                <i class="fas fa-building"></i>
                                <p>Create Note</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#module2">
                                <i class="fas fa-building"></i>
                                <p>Language Configuration</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse  " id="module2">
                                <ul class="nav nav-collapse">
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-user"></i>   
                                            <p>Language Configuration</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#module3">
                                <i class="fas fa-wrench"></i>
                                <p>Tools</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse  " id="module3">
                                <ul class="nav nav-collapse">
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-download"></i>   
                                            <p>Download Documents</p>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-home"></i> 
                                            <p>View News & Events</p>     
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-bullhorn"></i>
                                <p>Announcement</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#module4">
                                <i class="fas fa-file-image"></i>
                                <p>Banners</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse  " id="module4">
                                <ul class="nav nav-collapse">
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-arrow-right"></i>  
                                            <p>Replica Banner Image</p>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-arrow-right"></i> 
                                            <p>LCP Banner Image</p>     
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#module5">
                                <i class="fas fa-users"></i>
                                <p>Member Management</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse  " id="module5">
                                <ul class="nav nav-collapse">
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-user"></i>   
                                            <p>User Profile Management</p>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-key"></i> 
                                            <p>Change Password</p>     
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#module6">
                                <i class="fas fa-comments"></i>
                                <p>Mail Management</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse  " id="module6">
                                <ul class="nav nav-collapse">
                                    <li class=" ">
                                        <a href="#">
                                        <i class="fas fa-comments"></i>   
                                            <p>Mail Management</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#">
                               <i class="fas fa-heartbeat"></i>
                                <p>LCP</p>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a data-toggle="collapse" href="#">
                                <i class="fas fa-power-off"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @yield('content')
                
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        &copy; {{ date('Y') }}, NetWO</a>
                    </div>              
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    
    


    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- jQuery UI -->
    <script src="{{ asset('admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="{{ asset('admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <!-- Bootstrap Notify -->
    <script src="{{ asset('admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- Emoji -->
    <script src="//twemoji.maxcdn.com/2/twemoji.min.js?12.0.0"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('admin/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('admin/assets/js/atlantis.js') }}"></script>
    <!-- Data Table JS -->
    <script src="{{ asset('common/vendor/datatable/datatables.min.js') }}"></script>
    
    <!-- X Editable JS -->
    <script src="{{ asset('common/vendor/x-editable/js/bootstrap-editable.min.js') }}"></script>

    <!-- Select 2 -->
    <script src="{{ asset('common/vendor/select2/js/select2.full.min.js') }}"></script>
    
    <!-- Daterange Picker -->
    <script src="{{ asset('common/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Image Picker -->
    <script src="{{ asset('common/vendor/fileinput/js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('common/vendor/fileinput/js/fileinput.js') }}"></script>
    
    <!-- Validate -->
    <script src="{{ asset('common/vendor/validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('common/vendor/validate/additional-methods.js') }}"></script>

    <script src="{{ asset('common/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="{{ asset('admin/assets/js/plugin/chart.js/chart.min.js') }}"></script>
    
    @stack("js")

    @stack("include_js")
    
</body>
</html>