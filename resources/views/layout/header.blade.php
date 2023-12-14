<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Billing System</title>
</head>

<body>


    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            <img src="images/logo.png" alt=""></i>CodingNepal
        </div>
        <div class="search_bar">
            <input type="text" placeholder="Search" />
        </div>
        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <i class='bx bx-sun' id="darkLight"></i>
            <i class='bx bx-bell'></i>
            <img src="images/profile.jpg" alt="" class="profile" />
        </div>
    </nav>
    <!-- sidebar -->
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="menu_title menu_dahsboard"></div>
                <!-- duplicate these li tag if you want to add or remove navlink only -->
                <!-- Start -->
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-magic-wand"></i>
                        </span>
                        <span class="navlink">Magic build</span>
                    </a>
                </li>
                <!-- End -->
            </ul>
            <ul class="menu_items">
                <div class="menu_title menu_others"></div>
                <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
                <!-- start -->
                <li class="item">
                    <div href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-home-alt"></i>
                        </span>
                        <span class="navlink">Home</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>
                    <ul class="menu_items submenu">
                        <a href="#" class="nav_link sublink">Nav Sub Link</a>
                        <a href="#" class="nav_link sublink">Nav Sub Link</a>
                    </ul>
                </li>
                <!-- end -->
                <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
            </ul>
            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> Expand</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span> Collapse</span>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </div>
    </nav>

    <div id="mainContent" class="contentText">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield("content")
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->


    <!-- <nav class="navbar navbar-default no-margin">
        <div class="navbar-header fixed-brand">
            <button type="button" class="navbar-toggle collapsed microsoft" data-toggle="collapse" id="menu-toggle" style="float: inline-end;">
                <span class="glyphicon glyphicon-th-large" aria-hidden="true"><i class="fa-brands fa-microsoft" style="font-size: 25px;"></i></span>
            </button>
            <a class="navbar-brand ms-1" href="#"><i class="fa fa-rocket fa-4"></i> M-33</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x"></i></span> Dashboard</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa-solid fa-id-card fa-stack-1x"></i></span> Accounts</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="{{ route('addAccount') }}"><span class="fa-stack fa-lg pull-left"><i class="fa-solid fa-user-plus fa-stack-1x "></i></span>Add Account</a></li>
                        <li><a href="#"><span class="fa-stack fa-lg pull-left" style="margin-left: -3px;"><i class="fa-solid fa-user fa-stack-1x "></i></span> View Accounts</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="row">
                    <div class="col-lg-12">
                        @yield("content")
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="{{ asset('js/custom.js') }}"></script> -->
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>