{{-- @php

    $user = Auth::Guard('admin')->user();
    if($user == false)
    {
      redirect(route("private.login"));
    }
    $currentUrl = url()->current();
@endphp --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ config('app.name', 'NpCharity') }} @isset($title) :: {{ $title }} @endisset</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('admin/assets/img/favicon.png') }}" type="image/x-icon"/>

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

                <a href="" class="logo">
                    <img src="#" alt="NetWo" class="navbar-brand w-50">
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
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        {{-- <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li> --}}
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="mailDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope"></i>
                                <span class="notification">0</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="mailDropdown">
                                <li>
                                    <div class="dropdown-title">You have 0 new notification</div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">0</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 1 new notification</div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="currencyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-dollar-sign"></i>

                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="currencyDropdown">
                                <li>
                                    <div class="dropdown-title"><i class="fas fa-dollar-sign"></i> Dollar</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><i class="fas fa-euro-sign"></i> Euro</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><i class="fas fa-yen-sign"></i> Yuvan</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><i class="fas fa-won-sign"></i> Korean Won</div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="admin/assets/img/flags/en.png" />

                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="languageDropdown">
                                <li>
                                    <div class="dropdown-title"> <img src="admin/assets/img/flags/en.png" /> English</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><img src="admin/assets/img/flags/pt.png" /> Português</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><img src="admin/assets/img/flags/fr.png" /> Français</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><img src="admin/assets/img/flags/it.png" /> Italiano</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"> <img src="admin/assets/img/flags/tr.png" /> Türk</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><img src="admin/assets/img/flags/ro.png" /> România</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><img src="admin/assets/img/flags/ru.png" /> Pусский</div>
                                </li>
                                <li>
                                    <div class="dropdown-title"><img src="admin/assets/img/flags/rs.png" /> Kreyòl Ayisyen</div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="" alt="..." class="avatar-img rounded-circle">
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
                                                <a href="" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="">Logout</a>
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
                <div class="sidebar-content">
                    <ul class="nav nav-primary">
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#downline-view" data-toggle="collapse">
                                <i class="fas fa-user-cog"></i>
                                <p>Downline Graphical View</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="downline-view">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="">

                                                <i class="fas fa-users"></i>
                                                <p> Genealogy Tree</p>

                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class=" ">
                                        <a href="">

                                                <i class="fas fa-user-cog"></i>
                                                <p> Tabular Tree</p>

                                        </a>
                                    </li>
                                     <li class=" ">
                                        <a href="">

                                                 <i class="fas fa-user-shield"></i>
                                                <p> Sponsor Tree</p>
                                        </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="#resource-learing" data-toggle="collapse">
                                <i class="fas fa-book"></i>
                                <p>Resouce Learning Center</p>
                                 <span class="caret"></span>
                            </a>
                            <div class="collapse" id="resource-learing">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="">

                                                <i class="fas fa-book"></i>
                                                <p> Resouce Learning Center</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class=" ">
                                        <a href="">

                                                <i class="fas fa-video"></i>
                                                <p> Resouce Learning Videos</p>
                                        </span>
                                        </a>
                                    </li>
                                     <li class=" ">
                                        <a href="">

                                                <i class="fas fa-book"></i>
                                                <p> Success Manual</p>
                                        </span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="">

                                            <i class="fas fa-book"></i>
                                                <p> FAQ</p>
                                        </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-images"></i>
                                <p>Magazine Management</p>
                                <!-- <span class="caret"></span> -->
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="#marketing-tool" data-toggle="collapse">
                                <i class="fas fa-layer-group"></i>
                                <p>Marketing Tool</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="marketing-tool">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="">

                                                <i class="fas fa-folder"></i>
                                                <p> Create Marketing Tool</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class=" ">
                                        <a href="">

                                            <i class="far fa-file"></i>
                                                <p> View Marketing Tool</p>
                                        </span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-shopping-cart"></i>
                                <p>E-Commerce Store</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-sync"></i>
                                <p>Release Payout</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#settings" data-toggle="collapse">
                                <i class="fas fa-cogs"></i>
                                <p>Settings</p>
                               <span class="caret"></span>
                            </a>
                            <div class="collapse" id="settings">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-cog"></i>
                                                <p> Commission Settings</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="#tolls" data-toggle="collapse">
                                <i class="fas fa-wrench"></i>
                                <p>Tools</p>
                               <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tolls">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-check-square"></i>
                                                <p> Auto Responder</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-info-circle"></i>
                                                <p>Site Information</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-file-word"></i>
                                                <p> Content Management</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-file-word"></i>
                                                <p> Resource Learning Materials</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-file-upload"></i>
                                                <p> Upload Materials</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-plus-square"></i>
                                                <p>News Management</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-comment-alt"></i>
                                                <p>Email Notifications</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-globe"></i>
                                                <p>Clear Cache</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="#E-Wallet" data-toggle="collapse">
                                <i class="fas fa-calendar-alt"></i>
                                <p>E-Wallet Management</p>
                               <span class="caret"></span>
                            </a>
                            <div class="collapse" id="E-Wallet">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-money-bill-wave"></i>
                                                <p>Fund Management</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-exchange-alt   "></i>
                                                <p>Fund Transfer</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="">

                                            <i class="fas fa-paste"></i>
                                                <p>Transfer Details</p>
                                        </span>
                                            <!-- <span class="caret"></span> -->
                                        </a>

                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-bullhorn"></i>
                                <p>Announcement</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="" >
                                <i class="fas fa-sticky-note"></i>
                                <p>Reports</p>
                               <span class="caret"></span>
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="#" >
                                <i class="fas fa-comment-alt"></i>
                                <p>Mail Management</p>
                                <!-- <span class="caret"></span> -->
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-rss"></i>
                                <p>Ticket System</p>
                                <!-- <span class="caret"></span> -->
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-heartbeat"></i>
                                <p>LCP</p>
                                <!-- <span class="caret"></span> -->
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-newspaper"></i>
                                <p>Analytics</p>
                                <!-- <span class="caret"></span> -->
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-book-open"></i>
                                <p>Create Campaign Notes</p>
                                <!-- <span class="caret"></span> -->
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="">
                                <i class="fas fa-certificate"></i>
                                <p>Training & Certification </p>
                                <!-- <span class="caret"></span> -->
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
                        &copy; {{ date('Y') }}, NetWo</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->

    {{-- @include('includes.modal') --}}

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
    <script>
        var dateFormat = "{{ config("site.date_format.front") }}";
        var dateTimeFormat = "{{ config("site.date_time_format.front") }}";
        var notify = "";
        //Initialize Emoji
        $('body').bind("DOMSubtreeModified",function(){
            twemoji.parse(document.body);
        });
        $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $( document ).ajaxError(function( event, request, settings ) {
                notifyWarning("Something went wrong");
            });
        });

        $('.image-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            removalDelay: 300,
            gallery:{
                enabled:true,
            },
            mainClass: 'mfp-with-zoom',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });

    </script>

    @stack("js")

    @stack("include_js")

</body>
</html>

{{-- asset('admin/assets/img/profile.jpg') --}}
