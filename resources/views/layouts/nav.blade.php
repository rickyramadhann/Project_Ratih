<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Public Health | Beranda</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

     <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen" title="no title" charset="utf-8">

</head>

<body>

    <!--Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed personal-side-nav stylish-side-nav .navkiri">

            <!-- Logo -->
            <div class="logo-wrapper waves-light">
                <a href="#">
                    <img src="{{asset ('img/test.jpg')}}" class="img-circle">
                </a>
            </div>
            <!--/. Logo -->

            <!--About-->
            <div class="about centered">
                <h4>Public Health</h4>
                <p>Share About Public Health</p>
            </div>
            <!--/.About-->

            <!-- Side navigation links -->

            <ul class="collapsible collapsible-accordion">

                <li><a href="{{url ('/home')}}" class="collapsible-header waves-effect aktif">Beranda</a>

                </li>
                <li><a class="collapsible-header waves-effect">Artikel</a>
                    <div class="collapsible-body">
                        <ul>
                           @foreach($kategori as $j)
                             <li><a href="{{url ('/Category') }}" class="waves-effect">{{ $j->Kategori }}</a></li>
                          @endforeach
                           <li><a href="{{ $j->Id }}" class="waves-effect">Dr.Mirriam Stoppard</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{url ('/Gallery')}}" class="collapsible-header waves-effect">Gallery</a></li>
                <li><a href="{{url ('/About')}}" class="collapsible-header waves-effect">About</a></li>
                <li><a href="{{url ('/Gallery')}}" class="collapsible-header waves-effect">Contact</a></li>
            </ul>
            <!--/. Side navigation links -->
        </ul>
        <!--/. Sidebar navigation -->

        <!-- Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav mdb-color">

            <!-- SideNav slide-out button -->
            <div class="pull-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <a href="#" class="tagline">Berbagi Artikel Kesehatan Masyarakat</a>
            </div>

            <!--Navigation icons-->
            <ul class="nav-icons">
                <li><a href="#" class="" data-toggle="modal" data-target="#modal-contact"><i class="fa fa-envelope-o"></i><br><span>Contact</span></a></li>

            </ul>
        </nav>
        <!-- /.Navbar-->

    </header>
    <!--/.Navigation-->
