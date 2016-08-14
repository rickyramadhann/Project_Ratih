
   @include('layouts.nav')
    <!-- Main layout-->
    <main>
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="Allfoto">
                        <div class="col-md-12">
                            <h2>Gallery</h2>
                            <hr>
                            <div class="row jarakfoto wow slideInRight">
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="row wow slideInRight">
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="img/test.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/test.jpg" class="img-fluid"></a>
                                </div>

                            </div>
                            <hr>
                            <!--Pagination-->
                            <nav class="text-xs-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!--/.Pagination-->

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- /.Main layout-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only" style="background-color:#33cccc; ">

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
    <script type="text/javascript" src="js/lightbox.min.js"></script>

    <script>
        // SideNav Init
        $(".button-collapse").sideNav();
         new WOW().init();
    </script>


</body>

</html>
