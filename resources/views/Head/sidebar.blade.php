@section("sidebar")
    <nav class="navbar navbar-default no-margin">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header fixed-brand">
            <button type="button" class="navbar-toggle collapsed microsoft" data-toggle="collapse" id="menu-toggle" style="float: inline-end;">
                <span class="glyphicon glyphicon-th-large" aria-hidden="true"><i class="fa-brands fa-microsoft" style="font-size: 25px;"></i></span>
            </button>
            <a class="navbar-brand ms-1" href="#"><i class="fa fa-rocket fa-4"></i> M-33</a>
        </div>
        <!-- navbar-header-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                </li>
            </ul>
        </div>
        <!-- bs-example-navbar-collapse-1 -->
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x"></i></span> Dashboard</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x"></i></span> Shortcut</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
@endsection