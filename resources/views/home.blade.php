<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homeplan</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('style/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{ asset('style/css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/font-awesome/css/font-awesome.min.css')}}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    

</head>

  {{-- <body> --}}
    <body style="background-color:#CDE07B">

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
          <a class="navbar-brand" href="index.html">Homeplan</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="privacypolicy"><i class="fa fa-bar-chart-o"></i> Privacy Policy </a></li>
            {{-- <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
            <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
            <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
            <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li>
            <li><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
                <li><a href="#">Another Item</a></li>
                <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li> --}}
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <br>
    <div class="col-xs-12 text-left">
        <div class="content" style="padding-left:56px; padding-right:56px">>

            <div class="row">
                <div class="col" style="padding-left:360px;">
                    <img src="{{ asset('img/web.png') }}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col">
            <h2>Homeplan</h2>
    
            <p>Homeplan is an app that helps people who wants to renovate their house by calculating the cost of the materials needes.
                 Homplan also provides the design tools where the user can design their house on their own. 
                 They can see the prices in each region and got the newest update about the material prices. 
                 And they can change the materials according to what they want to use.</p>
                </div>

            <br>   
            <h4>Contact Us</h4>
		    <p>homeplan10.20@gmail.com</p>
            </div>
      </div>
    </div>


        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
    
        <!-- Page Specific Plugins -->
        <script src="{{asset('style/http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
        <script src="{{asset('style/http://cdn.oesmith.co.uk/morris-0.4.3.min.js')}}"></script>
        <script src="{{asset('style/js/morris/chart-data-morris.js')}}"></script>
        <script src="{{asset('style/js/tablesorter/jquery.tablesorter.js')}}"></script>
        <script src="{{asset('style/js/tablesorter/tables.js')}}"></script>
    
      </body>
    </html>
    