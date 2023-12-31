<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Black Dashboard')}}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="/black/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/black/img/favicon.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Icons -->
    <link href="/black/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS -->
    <link href="/black/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="/black/css/theme.css" rel="stylesheet" />
</head>

<body class="{{ $class ?? '' }}">

    @auth()
    <div class="wrapper">
        @include('layouts.navbars.sidebar')
        <div class="main-panel">
            @include('layouts.navbars.navbar')

            <div class="content">
                @yield('content')
            </div>

            @include('layouts.footer')
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
        @csrf
    </form>
    @else
    @include('layouts.navbars.navbar')
    <div class="wrapper wrapper-full-page">
        <div class="full-page {{ $contentClass ?? '' }}">
            <div class="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    @endauth
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-tasks fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">

            <form action="">

                <div class="row div_tasks">
                    <div class="div_row_tasks">
                        <h1 class=" ml-4 mt-3" >Tasks:</h1>


                            <div class="card ml-4 mt-3" style="width: 250px; height:100px">
                                <div style="margin-left: 20px;">
                                    <h4>@All</h4>
                                    <p>Проверить clookie</p>
                                </div>
                            </div>

                    </div>
                    <div class=" ml-3 div_row_tasks" >
                        <h1 class=" ml-4 mt-3">My:</h1>

                            <div class="card ml-4 mt-3" style="width: 250px; height:100px">
                                <div style="margin-left: 20px;">
                                    <h4>@Luckato</h4>
                                    <p>Купить домены для Poli</p>
                                </div>
                            </div>
                    </div>
                    <div class=" ml-3">
                        <h1 class=" ml-4 mt-3">Ready:</h1>


                            <div class="card ml-4 mt-3" style="width: 250px; height:100px">
                                <div style="margin-left: 20px;">
                                    <h4>@Luckato</h4>
                                    <p>Поднял прокси Valentin</p>
                                </div>
                            </div>
                            <div class="card ml-4 mt-3" style="width: 250px; height:100px">
                                <div style="margin-left: 20px;">
                                    <h4>@Pain</h4>
                                    <p>Добавил профиль для Valentin</p>
                                </div>
                            </div>

                    </div>



                </div>
            </form>
            </ul>
        </div>
    </div>





    <script src="/black/js/core/jquery.min.js"></script>
    <script src="/black/js/core/popper.min.js"></script>
    <script src="/black/js/core/bootstrap.min.js"></script>
    <script src="/black/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Chart JS -->
    {{-- <script src="/black/js/plugins/chartjs.min.js"></script> --}}
    <!--  Notifications Plugin    -->
    <script src="/black/js/plugins/bootstrap-notify.js"></script>

    <script src="/black/js/black-dashboard.min.js?v=1.0.0"></script>
    <script src="/black/js/theme.js"></script>






    @stack('js')





    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });





                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {
                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {
                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }
                });
            });
        });
    </script>
    @stack('js')
    <div class="overlay" style="display: none;"></div>
</body>

</html>