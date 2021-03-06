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
    <style>
        .area-padding{
            padding: 85px 0px 80px;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar-example" id="body">

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
                                    <li class="dropdown"><a id="indexDrop" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['name_user']; ?><span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li id="dropli"><a id="index" href=# >Drop Down 1</a></li>
                                            <li id="dropli"><a id="index" href=# >Drop Down 2</a></li>
                                        </ul> 
                                    </li>
                                <?php else: ?>
                                    <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#login">Ingresar <i class="fas fa-sign-in-alt"></i></a></li>
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

    <!-- Start Bottom Header 
    <div class="header-bg page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title2">Bienvenido</h1>
                            </div>
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                <h2 class="title3">Grupo Linux ITESCA</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- END Header -->
    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="page-head-blog">
                        <div class="single-blog-page">
                            <!-- search option start -->
                            <form action="#">
                                <div class="search-option">
                                    <input type="text" placeholder="Buscar...">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="single-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>publicaciones recientes</h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="flisol-2019.html">
                                                 <img src="img/FlisolV3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="flisol-2019.html">15to Festival Latinoamericano de Instalacion y Software libre.</a>
                                        </p>
                                        </div>
                                    </div>
                                    <!-- End single post -->

                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="torneos-2019.html">
                                                 <img src="img/lol.png" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p>
                                                <a href="torneos-2019.html">
                                                    Torneos FLISOL 2019. <br>
                                                    Enterate de más aquí
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                    
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                     <img src="img/kali-linux-wallpaper-v2.png" alt="">
                                                </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Nueva pagina del grupo Linux de ITESCA</a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->

                                    <!-- 
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                     <img src="img/blog/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                        </div>
                                    </div>
                                    
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                     <img src="img/blog/3.jpg" alt="">
                                                </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                        </div>
                                    </div>
                                   
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                     <img src="img/blog/4.jpg" alt="">
                                                </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                                        </div>
                                    </div>
                                    
 -->                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>categorías</h4>
                                <ul>
                                    <li><a href="#">Noticias</a></li>
                                    <li><a href="#">Proyectos</a></li>
                                    <li><a href="#">Eventos</a></li>
                                    <li><a href="#">Programación</a></li>
                                    <li><a href="#">Hackin</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>archive</h4>
                                <ul>
                                    <li>
                                        <a href="#">07 July 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">29 June 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">13 May 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">20 March 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">09 Fabruary 2016</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="single-blog-page">
                            <div class="left-tags blog-tags">
                                <div class="popular-tag left-side-tags left-blog">
                                    <h4>popular tags</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="#">Project</a>
                                        </li>
                                        <li>
                                            <a href="#">Design</a>
                                        </li>
                                        <li>
                                            <a href="#">Website</a>
                                        </li>
                                        <li>
                                            <a href="#">Joomla</a>
                                        </li>
                                        <li>
                                            <a href="#">Html</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="flisol-2019.html">
                                        <img src="img/FlisolV3.jpg" alt="" style="margin-bottom: 10px">
                                        <img src="img/posterv2.jpg" alt="" style="border:1px solid #ccc;">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="far fa-comments"></i>
                                        <a href="#">0 comentarios</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="far fa-calendar-alt"></i>06 de Abril, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fas fa-thumbtack"></i>
                                        <a href="#">Fijado</a>
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4><a href="flisol-2019.html">FLISOL 2019</a></h4>
                                    <p>
                                        Se aproxima el 15to Festival Latinoamericano de Instalación de software libre y Linux. Ven y disfruta de cuatro conferencias y cinco talleres a tu elección.
                                    </p>

                                </div>
                                <span>
                                    <a href="flisol-2019.html" class="ready-btn">Leer más</a>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="torneos-2019.html">
                                        <img src="img/lol.png" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="far fa-comments"></i>
                                        <a href="#">0 comentarios</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="far fa-calendar-alt"></i>01 de Abril 09:36 AM
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4><a href="torneos-2019.html">Torneos FLISOL 2019</a></h4>
                                    <p>
                                        Torneo de League of Legends, Super Smash Bros Ultimate y Dragon Ball.
                                    </p>

                                </div>
                                <span>
                                    <a href="torneos-2019.html" class="ready-btn">Leer más</a>
                                </span>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog-details.html">
                                        <img src="img/kali-linux-wallpaper-v2.png" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                            <i class="far fa-comments"></i>
                                            <a href="#">0 comentarios</a>
                                        </span>
                                    <span class="date-type">
                                        <i class="far fa-calendar-alt"></i>2019-03-10 / 09:25 PM
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4><a href="#">Nueva pagina del grupo Linux de ITESCA</a></h4>
                                    <p>
                                        Esta es la nueva pagina del Grupo Linux de ITESCA, próximamente estará completa para aprender muchísimos temas o enterarte de los eventos que vienen.
                                    </p>
                                </div>
                                <span>
                                    <a href="blog-details.html" class="ready-btn">Leer más</a>
                                </span>
                            </div>
                        </div>
                        
                        <div class="blog-pagination">
                            <ul class="pagination">
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <div class="clearfix"></div>
    <!-- Modal login-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                
                    <form class="form-horizontal" action="php/login.php" method="post" id="formLogin">
                        <div class="form-group no-margin-b">
                            <div class="col-sm-10 w-100">
                                <input type="email" class="form-control no-br-b br-1" id="inputEmail1" placeholder="Email" name="email">
                                <span class="fas fa-user form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 w-100 ">
                                <input type="password" class="form-control br-2" id="inputPassword3" placeholder="Password" name="pass">
                                <span class="fas fa-unlock-alt form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#registro" id="cerrar">Registrarse</button>
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('formLogin').submit()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal registro -->
    <div class="modal fade" id="registro" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Registro</h4>
                </div>
                <div class="modal-body">
                
                    <form class="form-horizontal" action="php/adduser.php" method="post" id="form1">
                        <div class="form-group no-margin-b">
                            <div class="col-sm-10 w-100 ">
                                <input type="text" class="form-control no-br-b br-1" id="inputName" placeholder="Nombres: " name="nombres">
                                <span class="fas fa-user form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group no-margin-b">
                            <div class="col-sm-10 w-100 ">
                                <input type="text" class="form-control no-br-b br-3" id="inputApe" placeholder="Apellidos: " name="apellidos">
                                <span class="fas fa-user form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group no-margin-b">
                            <div class="col-sm-10 w-100">
                                <input type="email" class="form-control no-br-b br-3" id="inputEmail2" placeholder="Email: " name="email">
                                <span class="fas fa-envelope form-control-feedback" aria-hidden="true"></span>
                                <!-- <i class="fas fa-envelope"></i> -->
                            </div>
                        </div>
                        <div class="form-group no-margin-b">
                            <div class="col-sm-10 w-100 ">
                                <input type="password" class="form-control no-br-b br-3" id="inputPassword1" placeholder="Password: " name="password1">
                                <span class="fas fa-unlock-alt form-control-feedback" aria-hidden="true"></span>

                            </div>
                        </div>

                        <div class="form-group no-margin-b">
                            <div class="col-sm-10 w-100 ">
                                <input type="password" class="form-control no-br-b br-3" id="inputPassword2" placeholder="Password: " name="password2">
                                <span class="fas fa-unlock-alt  form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="switch-box">
                            <h2 style="float: left;margin:4%;font-size: 14pt;line-height: initial;">Sexo</h2>
                            <div class="switch">
                                <input type="radio" class="switch-input" name="sexo" value="1" id="si" checked="">
                                <label for="si" class="switch-label switch-label-off">M</label>
                                <input type="radio" class="switch-input" name="sexo" value="0" id="no">
                                <label for="no" class="switch-label switch-label-on">F</label>
                                <span class="switch-selection"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 w-100 ">
                                <input type="date" title="Fecha de nacimiento" class="form-control br-2" id="fecha_nac" name="fecha_nac">
                                <!-- <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span> -->
                                
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('form1').submit()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
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

    <script type="text/javascript">
        $("#cerrar").click(function(){
            $("#body").css("padding", "0");
        });      

    </script>
</body>

</html>
