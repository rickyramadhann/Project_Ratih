

   @include('layouts.nav')
    <!-- Main layout-->
    <main>
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">

                    <!--Newsfeed-->
                    <div class="col-md-8">
                        <!-- Carousel -->
                        <div class="container">
                            <h2>Artikel Populer</h2>
                            <!--Carousel Wrapper-->
                            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->

                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <!--Mask color-->
                                        <div class="view hm-black-slight">
                                            <img src="img/article-bg.jpg" class="img-fluid" alt="Responsive image">
                                            <div class="full-bg-img">
                                            </div>
                                        </div>
                                        <!--Caption-->
                                        <div class="carousel-caption">
                                            <div class="animated fadeInDown">
                                                <h3 class="h3-responsive">Judul pertama</h3>
                                                <p>Secondary text</p>
                                            </div>
                                        </div>
                                        <!--Caption-->
                                    </div>
                                    <!--/First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view hm-black-slight">
                                            <img src="img/home-bg.jpg" class="img-fluid" alt="Responsive image">
                                            <div class="full-bg-img">
                                            </div>
                                        </div>
                                        <!--Caption-->
                                        <div class="carousel-caption">
                                            <div class="animated fadeInDown">
                                                <h3 class="h3-responsive">Judul Kedua</h3>
                                                <p>Secondary text</p>
                                            </div>
                                        </div>
                                        <!--Caption-->
                                    </div>
                                    <!--/Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view hm-black-slight">
                                            <img src="img/contact-bg.jpg" class="img-fluid" alt="Responsive image">
                                            <div class="full-bg-img">
                                            </div>
                                        </div>
                                        <!--Caption-->
                                        <div class="carousel-caption">
                                            <div class="animated fadeInDown">
                                                <h3 class="h3-responsive">Super light mask</h3>
                                                <p>Judul Ketiga</p>
                                            </div>
                                        </div>
                                        <!--Caption-->
                                    </div>
                                    <!--/Third slide-->
                                </div>
                                <!--/.Slides-->

                                <!--Controls-->
                                <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                    <span class="icon-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                    <span class="icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                            </div>


                            <!--/.Carousel Wrapper-->
                        </div>

                        <!-- article card -->
                        <div class="container">
                            <h2>Berita</h2>
                            <div class="row margincard wow fadeInUpBig">
                                <div class="col-lg-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="img/remaja.jpg" class="img-fluid" alt="">
                                            <a href="#">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Card title</h4>
                                            <!--Text-->
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="{{url ('/ReadArticle') }}" ><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
                                        </div>
                                        <!--/.Card content-->

                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="img/remaja.jpg" class="img-fluid" alt="">
                                            <a href="#">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Card title</h4>
                                            <!--Text-->
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="{{url ('/ReadArticle') }}" ><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
                                        </div>
                                        <!--/.Card content-->

                                    </div>

                                </div>

                            </div>
                            <div class="row margincard wow fadeInUpBig">
                                <div class="col-lg-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="img/remaja.jpg" class="img-fluid" alt="">
                                            <a href="#">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Card title</h4>
                                            <!--Text-->
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="{{url ('/ReadArticle') }}" ><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
                                        </div>
                                        <!--/.Card content-->

                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="img/remaja.jpg" class="img-fluid" alt="">
                                            <a href="#">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Card title</h4>
                                            <!--Text-->
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="{{url ('/ReadArticle') }}" ><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
                                        </div>
                                        <!--/.Card content-->

                                    </div>

                                </div>

                            </div>
                            <div class="row margincard wow fadeInUpBig">
                                <div class="col-lg-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="img/remaja.jpg" class="img-fluid" alt="">
                                            <a href="#">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Card title</h4>
                                            <!--Text-->
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="{{url ('/ReadArticle') }}" ><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
                                        </div>
                                        <!--/.Card content-->

                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="img/remaja.jpg" class="img-fluid" alt="">
                                            <a href="#">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Card title</h4>
                                            <!--Text-->
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="{{url ('/ReadArticle') }}" ><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
                                        </div>
                                        <!--/.Card content-->

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                    <!--Right sidebar-->
                    <div class="col-md-4">

                        <!--Panel-->
                        <div class="card">
                            <p class="card-header white-text ch-cari">Cari Artikel</p>
                            <div class="card-block">
                                <!--Right-->
                                <div class="md-form input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                     <button class="btn btn-md btn-cari" type="button">Cari</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel-->

                        <!--Widget: Tabs-->
                        <section class="widget-wrapper">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Recent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Random</a>
                                </li>
                            </ul>

                            <!-- Tab panels -->
                            <div class="tab-content">

                                <!--Panel 1-->
                                <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                                    <br>

                                    <!--Main wrapper-->
                                    <div class="horizontal-listing z-depth-1">
                                        <!--First row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.First row-->

                                        <!--Second row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.Second row-->

                                        <!--Third row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.Third row-->

                                    </div>
                                    <!--/.Main wrapper-->

                                </div>
                                <!--/.Panel 1-->

                                <!--Panel 2-->
                                <div class="tab-pane fade" id="panel2" role="tabpanel">
                                    <br>

                                    <!--Main wrapper-->
                                    <div class="horizontal-listing z-depth-1">
                                        <!--First row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.First row-->

                                        <!--Second row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.Second row-->

                                        <!--Third row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.Third row-->

                                    </div>
                                    <!--/.Main wrapper-->

                                </div>
                                <!--/.Panel 2-->

                                <!--Panel 3-->
                                <div class="tab-pane fade" id="panel3" role="tabpanel">
                                    <br>

                                    <!--Main wrapper-->
                                    <div class="horizontal-listing">
                                        <!--First row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.First row-->

                                        <!--Second row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.Second row-->

                                        <!--Third row-->
                                        <div class="row">
                                            <!--Image column-->
                                            <div class="col-xs-4">
                                                <div class="view overlay hm-white-slight">
                                                    <img src="img/remaja.jpg" class="img-fluid" alt="">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.Image column-->

                                            <!--Content column-->
                                            <div class="col-xs-8">
                                                <a><h2>Card title</h2></a>

                                                <div class="card-data">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        <li><a><i class="fa fa-comments-o"></i>12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.Content column-->

                                        </div>
                                        <!--/.Third row-->

                                    </div>
                                    <!--/.Main wrapper-->

                                </div>
                                <!--/.Panel 3-->

                            </div>
                            <!-- /.Tab panels -->
                        </section>
                        <!--Widget: Tabs-->
                        <hr>
                        <!-- Gallery -->
                        <h2>Gallery</h2>
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->

                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <!--Mask color-->
                                    <div class="view hm-black-slight">
                                        <img src="img/article-bg.jpg" class="img-fluid" alt="Responsive image">
                                        <div class="full-bg-img">
                                        </div>
                                    </div>

                                </div>
                                <!--/First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <!--Mask color-->
                                    <div class="view hm-black-slight">
                                        <img src="img/home-bg.jpg" class="img-fluid" alt="Responsive image">
                                        <div class="full-bg-img">
                                        </div>
                                    </div>

                                </div>
                                <!--/Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <!--Mask color-->
                                    <div class="view hm-black-slight">
                                        <img src="img/contact-bg.jpg" class="img-fluid" alt="Responsive image">
                                        <div class="full-bg-img">
                                        </div>
                                    </div>

                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->

                            <!--Controls-->
                            <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>



                    </div>
                    <!--/Right sidebar-->

                </div>
            </div>
        </div>
    </main>
    <!-- /.Main layout-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only" style="background-color:#33cccc">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--Social buttons-->
                <div class="social-section">
                    <ul>
                        <li><a href="#" class="btn btn-fb"><i class="fa fa-facebook left"></i> Facebook</a></li>
                        <li><a href="#" class="btn btn-tw"><i class="fa fa-twitter left"></i> Twitter</a></li>
                        <li><a href="#" class="btn btn-gplus"><i class="fa fa-google-plus left"></i> Google +</a></li>
                        <li><a href="#" class="btn btn-comm"><i class="fa fa-comments-o left"></i> Support</a></li>
                    </ul>
                </div>
                <!--/.Social buttons-->

                <!--Copyright-->
                <div class="footer-copyright">
                    <div class="container-fluid">
                        Project by Ricky <a href="#"> rickyramadhan027@gmail.com </a>
                    </div>
                </div>
                <!--/.Copyright-->

    </footer>
    <!--/Footer-->


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

    <script>
        // SideNav Init
        $(".button-collapse").sideNav();

        new WOW().init();

    </script>

</body>

</html>
