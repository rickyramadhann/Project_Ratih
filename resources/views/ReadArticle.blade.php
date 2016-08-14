
   @include('layouts.nav')
<!-- Main layout-->
    <!-- Main layout-->
    <main>
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">

                    <!--Newsfeed-->
                    <div class="col-md-8">
                        <!-- Carousel -->
                        <div class="container">
                            <!--Post-->
                            <div class="post-wrapper">
                                <!--Post data-->
                              @foreach($test2 as $testlagi)
                                <h1 class="h1-responsive">{{$testlagi->Judul_Artikel}}</h1>
                                <h5>Written by <a href="">{{$testlagi->Penulis}}</a>,{{$testlagi->created_at}}</h5>

                                <br>

                                <!--Featured image -->
                                <div class="view hm-white-light" style="width:100%">
                                    <img src="{{ asset ('img/remaja.jpg') }}" class="img-fluid " alt="">
                                    <div class="mask">
                                    </div>
                                </div>

                                <br>

                                <!--Post excerpt-->
                                <p>
                                   {{$testlagi->Isi_Artikel}}
                                </p>

                                @endforeach
                            </div>


                            <nav>
                                <ul class="pager">
                                    <li><a href="#">Previous</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </nav>

                            <!--/.Post-->

                            <hr>



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

                        <div class="widget-wrapper">
                           <h4 class="judulmateri">Dasar Pendidikan Kesehatan Masyarakat:</h4>
                           <br>
                           <div class="list-group">
                                <a href="#" class="list-group-item active">Materi 1</a>
                                <a href="#" class="list-group-item">Materi 2</a>
                                <a href="#" class="list-group-item">Materi 3</a>
                                <a href="#" class="list-group-item">Materi 4</a>
                                <a href="#" class="list-group-item">Materi 5</a>
                           </div>
                        </div>

                    </div>
                    <!--/Right sidebar-->

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

    <script>
        // SideNav Init
        $(".button-collapse").sideNav();
    </script>


</body>

</html>
