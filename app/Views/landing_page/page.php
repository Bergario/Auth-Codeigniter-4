<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/css/img/favicon.png" type="image/x-icon">

    <!-- MY FONT FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/css/fontawesome-free-5.14.0-web/css/all.css" type="text/css">


    <title>Segara Berkat Bersama</title>
</head>

<body>
    <div class="imgbody">


        <!-- AWAL NAVBAR -->
        <div class="container navi">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url(); ?>/css/img/logo SBB.png">
                    Segara Berkat Bersama</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#product">Features</a>
                        <a class="nav-link" id="abouta" href="#about">About Us</a>
                        <a class="nav-link" href="#">Contact Us</a>
                        <a class="btn btn-primary tombol" href="<?= base_url() . "/user/login"; ?>">Join Us</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- AKHIR NAVBAR -->

        <!-- JUMBOTRON -->
        <div class="jumbotron satu jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><span>Shrimp</span> farming is an <br> aquaculture <span>producing</span>
                    <br>shrimp
                    or
                    prawns</h1>
                <!-- <a href="#" class="btn btn-primary tombol">Our Work</a> -->

            </div>
        </div>
        <!-- AKHIR JUMBOTRON -->

        <!-- GARIS -->
        <div class="row">
            <div class="col-md garis">
            </div>
        </div>


        <!-- CONTAINER -->
        <div class="container">

            <!-- PANEL -->

            <div class="row justify-content-center">

                <div class="col-lg-10 panel">

                    <div class="row">

                        <div class="col-lg">

                            <img src="<?= base_url(); ?>/css/img/employee.png" alt="" class="float-left">
                            <h4>Performance</h4>
                            <p>Lorem ipsum dolor sit amet.</p>

                        </div>
                        <div class="col-lg">

                            <img src="<?= base_url(); ?>/css/img/lampu.png" alt="" class="float-left">
                            <h4>Ideas</h4>
                            <p>Lorem ipsum dolor sit amet.</p>

                        </div>
                        <div class="col-lg">

                            <img src="<?= base_url(); ?>/css/img/xx.png" alt="" class="float-left">
                            <h4 class="">Team</h4>
                            <p class="">Lorem ipsum dolor sit amet.</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- AKHIR PANEL -->

        <!-- JUMBOTRON2 -->
        <div class="jumbotron jumbotron-fluid dua">
            <div class="container">
                <!-- PRODUCT -->
                <div class="row title" id="product">
                    <div class="col-md">
                        <h1>FEATURES</h1>
                    </div>
                </div>
                <!-- GARIS -->
                <div class="row line">
                    <div class="col-md garis3">
                    </div>
                </div>
                <div class="row line">
                    <div class="col-md garis2">
                    </div>
                </div>

                <!-- SLIDE SHOW -->
                <div class="row slide">
                    <div class="col">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url(); ?>/css/img/1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url(); ?>/css/img/4.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url(); ?>/css/img/5.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AKHIR JUMBOTRON -->

        <!-- JUMBOTRON 3 -->
        <div class="jumbotron jumbotron-fluid tiga">
            <div class="container" id="about">
                <div class="row title2">
                    <h1>ABOUT US</h1>
                </div>
                <!-- GARIS -->
                <div class="row line">
                    <div class="col-md aboutline1">
                    </div>
                </div>
                <div class="row line">
                    <div class="col-md aboutline2">
                    </div>
                </div>
                <!-- AKHIR GARIS -->

                <div class="row about">
                    <div class="col-md-5 about">
                        <h5>We Are Profesional</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed distinctio fugit fuga magnam
                            similique voluptatibus corporis nihil veniam dolor odit repudiandae alias accusamus maiores,
                            nulla ea totam vitae numquam consequuntur id neque, minus corrupti soluta. Id sint
                            voluptatum consequuntur ducimus excepturi porro recusandae qui corrupti? Numquam facilis
                            deserunt sunt architecto!</p>
                    </div>
                    <div class="col-md-5 about">
                        <div class="cf">
                            <i class="fas fa-award"></i>
                            <h6>Quality</h6>
                            <div>
                                <span class="icon" style="width: 180px;"></span>
                                <span class="icon2" style="width: 20px;"></span>
                            </div>
                        </div>
                        <div class="cf">
                            <i class="fas fa-toolbox"></i>
                            <h6>Technical</h6>
                            <div>
                                <span class="icon" style="width: 170px;"></span>
                                <span class="icon2" style="width: 30px;"></span>
                            </div>
                        </div>
                        <div class="cf">
                            <i class="fas fa-user-check"></i>
                            <h6>Trusted</h6>
                            <div>
                                <span class="icon" style="width: 200px;"></span>
                                <span class="icon2" style="width: 0;"></span>
                            </div>
                        </div>
                        <div class="cf">
                            <i class="fas fa-anchor"></i>
                            <h6>Strategic</h6>
                            <div>
                                <span class="icon" style="width: 150px;"></span>
                                <span class="icon2" style="width: 50px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT -->
        <section class="section section-light">
            <div class="container">
                <div class="row">
                    <h1>CONTACT US</h1>
                </div>
                <!-- GARIS -->
                <div class="row line">
                    <div class="col-md linecontact2">
                    </div>
                </div>
                <div class="row line">
                    <div class="col-md linecontact1">
                    </div>
                </div>
            </div>
            <!-- AKHIR GARIS -->
            <div class="row contactus">
                <div class="col-md-6 botcont">
                    <form class="form">
                        <h4>Kirim Pesan</h4>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis pesan..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Kirim</button>
                    </form>

                </div>
                <div class="col-md-5 botcont">
                    <img src="<?= base_url(); ?>/css/img/comuni.png" alt="">
                </div>
            </div>

        </section>


        <!-- AKHIR CONTAINER -->
    </div>

    <!-- Image and text -->
    <div class="footer">
        <div class="container footcontent">
            <div class="row">
                <div class="col-md-4 office">
                    <h4>Office</h4>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h6>Address</h6>
                    <p>Lorem ipsum dolor sit amet consectetur </p>

                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <h6>Email</h6>
                    <p>Segara@berkat.com</p>

                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h6>Phone</h6>
                    <p>(021)-1234567689</p>
                </div>

                <div class="col-md-4 explore">
                    <h4>Explore</h4>
                    <p>Home</p>
                    <p>Features</p>
                    <p>About Us</p>
                    <p>Contact Us</p>
                </div>

                <div class="col-md-4 connect">
                    <h4>Connect With Us</h4>
                    <i class="fab fa-twitter"></i>
                    <p>@segara</p>
                    <div></div>

                    <i class="fab fa-instagram"></i>
                    <p>@segara</p>
                    <div></div>

                    <i class="fab fa-facebook-square"></i>
                    <p>SegaraBerkat</p>

                </div>
            </div>
        </div>

        <hr>
        <div class="row footersbb">
            <div class="col-md">

                <p>
                    <img src="<?= base_url(); ?>/css/img/Logo SBB.png" class="gb" alt="">
                    PT. SEGARA BERKAT BERSAMA 2020</p>


            </div>
        </div>
    </div>
    <!-- </div> -->









    <!-- Opti   onal JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>/js/script.js"></script>
</body>


</html>

