<?php 
        require 'php/isLogin.php';
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Grupu Linux ITESCA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <!-- <link href="img/favicon.png" rel="icon"> -->
    <link href="img/logo2.png" rel="icon">
    <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style type="text/css">
        .area-padding{
            padding: 85px 0px 80px;
        }
        .img-p{
            width: 100%;
        }
        .color-red{
            color: rgb(229, 50, 44);
        }
        .pclass{
            font-size: 13pt;
        }
        .final {
            color: #777;
            font-size: 12pt;
        }
        @media screen and (max-width: 1440px){
            .img-p{
                width: 63%;
            }   
        }
        @media screen and (max-width: 800px){
            .area-padding{
                padding: 85px 20px 80px;
            }
            .img-p{
                width: 100%;
            }
        }
    </style>    

</head>

<body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>
    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area" style="background: #000;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                                    <!-- Uncomment below if you prefer to use an image logo -->
                                    <img src="img/logo2.png" style="width: 40px;float: left" alt="" title=""> 
                                    <h1 id="menu_h1"><span>G</span>rupo <span>L</span>inux <span>I</span>TESCA</h1>
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="page-scroll" href="#home">Inicio</a></li>
                                    <!--
                                    <li><a class="page-scroll" href="#about">About</a></li>
                                    <li><a class="page-scroll" href="#services">Services</a></li>
                                    <li><a class="page-scroll" href="#team">Team</a></li>
                                    <li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
                                    <li><a class="page-scroll" href="#blog">Blog</a></li>
                                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                                    -->
                                    <li><a class="page-scroll" href="#">Quienes somos</a> </li>
                                    <li><a class="page-scroll" href="#">Contactanos</a></li>
                                    <?php if ($status): ?>
                                    <li class="dropdown">
                                        <a id="indexDrop" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['name_user']; ?>
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li id="dropli"><a id="index" href=# >Drop Down 1</a></li>
                                            <li id="dropli"><a id="index" href=# >Drop Down 2</a></li>
                                        </ul> 
                                    </li>
                                    <?php else: ?>
                                    <li>
                                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#login">
                                            Ingresar <i class="fas fa-sign-in-alt"></i>
                                        </a></li>
                                    <?php endif ?>

                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>

    <!-- header end -->

    <!-- Start Bottom Header -->
    <!-- <div class="header-bg page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title2">Blog </h1>
                            </div>
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                - <h2 class="title3">Blog Page</h2> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div> -->

    <!-- END Header -->
    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- single-blog start -->
                            <article class="blog-post-wrapper">
                                <div class="post-thumbnail">
                                    <center>
                                        <img src="img/Flisol.jpg" class="img-p" alt="" />
                                    </center>
                                </div>
                                <div class="post-information">
                                    <h2>FLISOL 2019</h2>
                                    <div class="entry-meta">
                                        <span class="author-meta"><i class="fa fa-user"></i> <a href="#">Isai Aleman</a></span>
                                        <span><i class="fa fa-clock-o"></i> 30 de Marzo, 2019</span>
                                        
                                        <span><i class="far fa-comments"></i> <a href="#">0 comentarios</a></span>
                                    </div>
                                    <div class="entry-content">
                                        <p class="pclass">
                                            Se aproxima el 15to Festival Latinoamericano de Instalación de software libre y Linux. Ven y disfruta de cuatro conferencias y cinco talleres a tu elección.
                                        </p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>CONFERENCIAS</h4>
                                                <p class="pclass">
                                                    <b>Jueves 2 de Mayo de 2019.</b> <br>
                                                    <span class="color-red">
                                                        <b>Aula Magna</b>
                                                    </span><br>
                                                    <b>09:00 a 10:00</b>
                                                        <i>Metodologías para el Desarrollo de Productos de Alto Valor.</i>
                                                    <br>
                                                    <span class="final">MC. Jorge Heras | Jorge Heras, Agile Coach, Hillo. Son </span>
                                                </p>
                                                <p class="pclass">
                                                    <b>10:00 a 11:00</b>
                                                        <i>Inteligencia Artificial y Ciencia de Datos.</i>
                                                    <br>
                                                    <span class="final">Dr. Luis Felipe Rodríguez | Instituto Tecnológico de Sonora </span>
                                                </p>
                                                <p class="pclass">
                                                    <span class="color-red"><b>11:00 a 11:30</b></span>
                                                        <i>Inauguración.</i>
                                                    <br>
                                                    <span class="final">Lic. Gabriel Baldenebro Patrón | Dir. General de ITESCA </span>
                                                </p>
                                                <p class="pclass">
                                                    <b>11:30 a 12:30</b>
                                                        <i>Conferencia.</i>
                                                    <br>
                                                    <span class="final">Dra. Elsa Padilla Monge | Instituto Tecnológico de Sonora </span>
                                                </p>
                                                <p class="pclass">
                                                    <b>12:30 a 13:30</b>
                                                        <i>Python Aplicado a Soluciones Matemáticas.</i>
                                                    <br>
                                                    <span class="final">Dr. Guadalupe Castro Lugo | Instituto Tecnológico Superior de Cajeme </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h4>TALLERES</h4>
                                                <p class="pclass">
                                                    <b>Jueves 2 de Mayo de 2019.</b> <br>
                                                    <span class="color-red">
                                                        <b>Aula ITESCA</b>
                                                    </span><br>
                                                    <b>15:00 a 19:00</b>
                                                        <i>Python-Ciencias de Datos.</i>
                                                    <br>
                                                    <span class="final">Dr. Luis Felipe Rodríguez | ITSON </span>
                                                </p>
                                                <p class="pclass">
                                                    <span class="color-red">
                                                        <b>CISCO</b>
                                                    </span><br>
                                                    <b>15:00 a 19:00</b>
                                                        <i>Seguridad en Redes.</i>
                                                    <br>
                                                    <span class="final">Mtro. Ignacio Urbalejo | ITESCA </span>
                                                </p>
                                                <p class="pclass">
                                                    <span class="color-red">
                                                        <b>Aula ITESCA</b>
                                                    </span><br>
                                                    <b>15:00 a 19:00</b>
                                                        <i>Python Básico.</i>
                                                    <br>
                                                    <span class="final">Mtro. Juan Salvador Hdz. Gómez | ITESCA </span>
                                                </p>
                                                <p class="pclass">
                                                    <span class="color-red">
                                                        <b>Aula ITESCA</b>
                                                    </span><br>
                                                    <b>15:00 a 19:00</b>
                                                        <i>OpenCV.(computer vision).</i>
                                                    <br>
                                                    <span class="final">Mtro. José Luis Beltrán Márquez | ITESCA </span>
                                                </p>
                                                <p class="pclass">
                                                    <span class="color-red">
                                                        <b>Aula ITESCA</b>
                                                    </span><br>
                                                    <b>15:00 a 19:00</b>
                                                        <i>Video Juegos con Java y LibGdx.</i>
                                                    <br>
                                                    <span class="final">Ing. Manuel de Jesús Román | GRUPO OJAI </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>CONCURSOS DE VIDEO JUEGOS.</h4>
                                                <p class="pclass">
                                                    <b>Sábado 4 Mayo de 2019</b> <br>
                                                    <span class="color-red">
                                                        <b>Aula Magna</b>
                                                    </span><br>
                                                    <b>10:00 a 18:00</b>
                                                        <i>LEAGUE OF LEGENDS (finales).</i>
                                                    <br>
                                                </p>
                                                <p class="pclass">
                                                    <span class="color-red">
                                                        <b>Aula Magna</b>
                                                    </span><br>
                                                    <b>10:00 a 18:00</b>
                                                        <i>SUPER SMASH BROS ULTIMATE.</i>
                                                    <br>
                                                </p>
                                                <p class="pclass">
                                                    <span class="color-red">
                                                        <b>Aula Magna</b>
                                                    </span><br>
                                                    <b>10:00 a 18:00</b>
                                                        <i>DRAGON BALL.</i>
                                                    <br>
                                                </p>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <h4>INSTALL FEST</h4>
                                                <p class="pclass">
                                                    <b>Sábado 4 Mayo de 2019</b> <br>
                                                    <span class="color-red">
                                                        <b>LAB. LINUX (AULA 303)</b>
                                                    </span><br>
                                                    <b>10:00 a 15:00</b>
                                                        <i>Instalación de Software Libre</i>
                                                    <br>
                                                </p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </article>
                            <div class="clear"></div>
                            <div class="single-post-comments">
                                <div class="comments-area">
                                    <div class="comments-heading">
                                        <h3>0 comentarios</h3>
                                    </div>
                                    <div class="comments-list">
                                        <ul>
                                            <!-- <li class="threaded-comments">
                                                <div class="comments-details">
                                                    <div class="comments-list-img">
                                                        <img src="img/blog/b02.jpg" alt="post-author">
                                                    </div>
                                                    <div class="comments-content-wrap">
                                                        <span>
                                                                <b><a href="#">demo</a></b>
                                                                Post author
                                                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                                        <a href="#">Reply</a>
                                                        </span>
                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                    </div>
                                                </div>
                                            </li> -->
                                            <!-- <li>
                                                <div class="comments-details">
                                                    <div class="comments-list-img">
                                                        <img src="img/blog/b02.jpg" alt="post-author">
                                                    </div>
                                                    <div class="comments-content-wrap">
                                                        <span>
                                                                <b><a href="#">admin</a></b>
                                                                Post author
                                                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                                        <a href="#">Reply</a>
                                                        </span>
                                                        <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="threaded-comments">
                                                <div class="comments-details">
                                                    <div class="comments-list-img">
                                                        <img src="img/blog/b02.jpg" alt="post-author">
                                                    </div>
                                                    <div class="comments-content-wrap">
                                                        <span>
                                                                <b><a href="#">demo</a></b>
                                                                Post author
                                                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                                        <a href="#">Reply</a>
                                                        </span>
                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                    </div>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply </h3>
                                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Name *</p>
                                                <input type="text" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Email *</p>
                                                <input type="email" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Website</p>
                                                <input type="text" />
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                <p>Website</p>
                                                <textarea id="message-box" cols="30" rows="10"></textarea>
                                                <input type="submit" class="" value="Post Comment" />
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
    <div class="clearfix"></div>

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <img src="img/logo2.png" style="width: 40px;float: left;margin-right: 10px;" alt="" title=""> 
                                    <h2><span>G</span><span>L</span><span>I</span>MX</h2>
                                </div>
                                <p>Esta pagina esta en desarrollo.</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>informacion</h4>
                                <p>Somos el Grupo Linux de ITESCA</p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> (633) 102 310 8 - Developer.</p>
                                    <p><span>Email:</span> shdz@itesca.edu.mx</p>
                                    <!-- <p><span>Working Hours:</span> 9am-5pm</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer 
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Instagram</h4>
                                <div class="flicker-img">
                                    <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                                    <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                                    <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                                    <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                                    <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                                    <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                Copyright © Linux ITESCA Developers 2019. Isai Aleman.
                            </p>
                        </div>
                        <div class="credits">
                            <a href="https://getbootstrap.com/">Boostrap</a> - <a href="https://jquery.com/">JQuery</a> - <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
