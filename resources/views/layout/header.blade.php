<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Billing System</title>
</head>

<body>


    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            <img src="...">Billing System
        </div>
        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <i class='bx bx-sun' id="darkLight"></i>
            <i class='bx bx-bell'></i>
            <img src="..." class="profile" />
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
                    <a href="{{ route('dashboard') }}" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-home'></i>
                        </span>
                        <span class="navlink fw-bold">Dashboard</span>
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
                            <i class='bx bx-user-pin' ></i>
                        </span>
                        <span class="navlink fw-bold">Accounts</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>
                    <ul class="menu_items submenu">
                        <a href="{{ route('addAccount') }}" class="nav_link sublink fw-bold">Add Account</a>
                        <a href="{{ route('viewAccount') }}" class="nav_link sublink fw-bold">View Accounts</a>
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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>