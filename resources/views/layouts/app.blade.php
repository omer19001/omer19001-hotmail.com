<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
    <script src="{{ asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('js/metisMenu/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('js/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('js/morris/morris.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/sb-admin-2.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{asset('css/rtl/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="{{asset('css/rtl/bootstrap.rtl.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('css/plugins/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/rtl/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    
<body>
    <div id="app">
         @auth
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> {{ config('app.name', 'Laravel') }}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> الملف الشخصي</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> الاعدادات</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">><i class="fa fa-sign-out fa-fw"></i> تسجيل الخروج</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active" href="{{route('home')}}"><i class="fa fa-dashboard fa-fw"></i> لوحة التحكم</a>
                        </li>
                        <li>
                            <a href="{{route('client.show')}}"><i class="fa fa-users fa-fw"></i> العملاء </a>
                             
                            
                        </li>
                        <li>
                            <a href="{{route('driver.show')}}"><i class="fa fa-truck fa-fw"></i> السواقين </a>
                             
                 
                        </li>
                        <li>
                            <a href="{{route('product.show')}}"><i class="fa fa-bar-chart-o fa-fw"></i> المنتجات </a>
                             
                 
                        </li>
                        <li>
                            <a href="{{route('sale.show')}}"><i class="fa fa-bar-chart-o fa-fw"></i> المبيعات </a>
                             
                 
                        </li>
                         
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        @endauth
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
