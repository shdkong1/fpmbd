
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') NorthWind</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('style/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{ asset('style/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/font-awesome/css/font-awesome.min.css') }}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">NorthWind</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="dropdown">
              <a href="charts.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Products <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Products</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Category</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="tables.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Employees <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Employees</a></li>
                <li><a href="#">Territories</a></li>
                <li><a href="#">Region</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="forms.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Customers <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Customers</a></li>
                <li><a href="#">Customer Demographics</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="typography.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-font"></i> Shippers <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('shipper') }}">Shippers</a></li>
                <li><a href="#">States</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> Orders <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Orders</a></li>
                <li><a href="#">Order Details</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

        @yield('breadcrumb')

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>Statistics Overview</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Welcome to NorthWind Store!
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{ asset('style/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.js') }}"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="{{ asset('style/js/morris/chart-data-morris.js') }}"></script>
    <script src="{{ asset('style/js/tablesorter/jquery.tablesorter.js') }}"></script>
    <script src="{{ asset('style/js/tablesorter/tables.js') }}"></script>

  </body>
</html>
