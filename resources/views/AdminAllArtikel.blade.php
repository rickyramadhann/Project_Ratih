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
                    <img src="img/test.jpg" class="img-circle">
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

               <li><a href="{{url ('/AdminAllArtikel')}}" class="collapsible-header waves-effect aktif">All Article</a></li>
               <li><a href="{{url ('/adminpost')}}" class="collapsible-header waves-effect aktif">Add Article</a></li>

                <li><a href="#" class="collapsible-header waves-effect">Photo Gallery</a></li>
                <li><a href="#" class="collapsible-header waves-effect">About</a></li>
                <li><a href="#" class="collapsible-header waves-effect">Contact</a></li>
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
                <a href="#" class="tagline">Welcome to Admin Page</a>
            </div>

            <!--Navigation icons-->
            <ul class="nav-icons">
                <li><a href="#" class="" data-toggle="modal" data-target="#modal-contact"><i class="fa fa-eye"></i><br><span>Live Preview</span></a></li>

            </ul>
        </nav>
        <!-- /.Navbar-->

    </header>
    <!--/.Navigation-->

    <!-- Main layout-->
    <main>
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="Allfoto">
                        <div class="col-md-12">
                            <h2>Lihat semua Artikel</h2>
                            <hr>

                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Id</th>
                                            <th>Judul Artikel</th>
                                            <th>Penulis</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Do Something</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($records as $record)

                                        <tr>
                                            <th scope="row"></th>
                                            <td>111</td>
                                            <td>{{$record->Judul_Materi}}</td>
                                            <td>{{$record->Penulis}}</td>
                                            <td>{{$record->Kategori}}</td>
                                            <td>{{$record->created_at}}</td>
                                            <td class="do">
                                                <a class="btn btn-default"><i class="fa fa-edit left"></i> Edit</a>
                                                <a class="btn btn-default" href="hapus/{{ $record->Id }}"><i class="fa fa-edit left"></i> Delete</a>

                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>111</td>
                                            <td>Cara merawat Bayi</td>
                                            <td>Ratih</td>
                                            <td>Mirriam Stoppard</td>
                                            <td>20 Agustus 2016</td>
                                            <td class="do">
                                                <a class="btn btn-default"><i class="fa fa-edit left"></i> Edit</a>
                                                <a class="btn btn-danger"><i class="fa fa-trash-o left"></i> Delete</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- /.Main layout-->



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>

    <script>
        // SideNav Init
        $(".button-collapse").sideNav();
        new WOW().init();
    </script>


</body>

</html>
