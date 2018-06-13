<!DOCTYPE HTML>
<html>
    <head>
        <title>Emplea-T | Portal de ofertas y búsqueda de empleos</title>
        <link rel="icon" href="assets/img/BIT.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Empleos tehuacan, trabajos en tehuacan" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>
        <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!-- font-Awesome----->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- font-Awesome----->
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="recursos/logo.png" alt=""/></a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li><a href="jobs.php">Empleos</a></li>
                        <li><a href="about.php">Publicar oferta</a></li>
                        <li><a href="" data-toggle="modal" data-target="#modalSesion">Iniciar sesión</a></li>
                        <li><a href="register.php">Crear cuenta</a></li>
                        <li><a href="resume.php">Busco empleo</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
                <div class="clearfix"> </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/.navbar-default-->
        <!--<div class="banner">
                <div class="container">
                        <div id="search_wrapper">
                                <div id="search_form" class="clearfix">
                                        <h1>Comienza a buscar empleo</h1>
                                        <p>
                                                <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                                                <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                                                <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Busca Empleos"></label>
                                        </p>
                                        <h2 class="title">top Countries &amp; searches</h2>
                                </div>
                                <div id="city_1" class="clearfix">
                                        <ul class="orange">
                                                <li>
                                                        <a href="#">Japan</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Kenya Jobs">Kenya</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Australia Jobs">Australia</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Poland Jobs">Poland</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Oman Jobs">Oman</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Pakistan jobs">Pakistan</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Saudi Arbia Jobs">Saudi Arbia</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Doha Jobs">Doha</a>
                                                </li>
                                        </ul>
                                        <ul class="orange">
                                                <li>
                                                        <a href="#" title="Russia Jobs">Russia</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Germany Jobs">Germany</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Canada Jobs">Canada</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Hong Kong Jobs">Hong Kong</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Spain Jobs">Spain</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Thailand Jobs">Thailand</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Norway Jobs">Norway</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Srilanka Jobs">Srilanka</a>
                                                </li>
                                        </ul>
                                        <ul class="blue">
                                                <li>
                                                        <a href="#" title="Information Technology">Mexico</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Fresher">Fresher</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Engineering">Engineering</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Finance Jobs">Finance</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Teaching">Teaching</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Software">Software</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Accounting">Accounting</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Data Entry">Data Entry</a>
                                                </li>
                                        </ul>
                                        <ul class="blue">
                                                <li>
                                                        <a href="#" title="Marketing Jobs">Marketing </a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Freelancer">Freelancer</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Internet Jobs">Internet</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Sales">Sales</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Legal">Legal</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="HR">HR</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="MBA">MBA</a>
                                                </li>
                                                <li>
                                                        <a href="#" title="Pharma">Pharma</a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>-->
        <div class="container">
            <div class="grid_1">
                <h3>Featured Employers</h3>
                <ul id="flexiselDemo3">
                    <li><img src="images/c1.gif" class="img-responsive" /></li>
                    <li><img src="images/c2.gif" class="img-responsive" /></li>
                    <li><img src="images/c3.gif" class="img-responsive" /></li>
                    <li><img src="images/c4.gif" class="img-responsive" /></li>
                    <li><img src="images/c5.gif" class="img-responsive" /></li>
                    <li><img src="images/c6.gif" class="img-responsive" /></li>
                </ul>
                <script type="text/javascript">
$(window).load(function () {
    $("#flexiselDemo3").flexisel({
        visibleItems: 6,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3
            }
        }
    });

});
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
            </div>
            <div class="single">
                <div class="col-md-4">
                    <div class="col_3">
                        <h3>Todays Jobs</h3>
                        <ul class="list_1">
                            <li><a href="#">Department of Health - Western Australia</a></li>
                            <li><a href="#">Australian Nursing Agency currently require experiences</a></li>
                            <li><a href="#">Russia Nursing Agency currently require experiences</a></li>
                            <li><a href="#">The Government of Western Saudi Arbia</a></li>
                            <li><a href="#">Department of Health - Western Australia</a></li>
                            <li><a href="#">Australian Nursing Agency currently require experiences</a></li>
                            <li><a href="#">Russia Nursing Agency currently require experiences</a></li>
                            <li><a href="#">The Scientific Publishing Services in Saudi Arbia</a></li>
                            <li><a href="#">BPO Private Limited in Canada</a></li>
                            <li><a href="#">Executive Tracks Associates in Pakistan</a></li>
                            <li><a href="#">Pyramid IT Consulting Pvt. Ltd. in Pakistan</a></li>
                        </ul>
                    </div>
                    <div class="col_3">
                        <h3>Jobs by Category</h3>
                        <ul class="list_2">
                            <li><a href="#">Railway Recruitment</a></li>
                            <li><a href="#">Air Force Jobs</a></li>
                            <li><a href="#">Police Jobs</a></li>
                            <li><a href="#">Intelligence Bureau Jobs</a></li>
                            <li><a href="#">Army Jobs</a></li>
                            <li><a href="#">Navy Jobs</a></li>
                            <li><a href="#">BSNL Jobs</a></li>
                            <li><a href="#">Software Jobs</a></li>
                            <li><a href="#">Research Jobs</a></li>
                        </ul>
                    </div>
                    <!--<div class="widget">
                            <h3>Take The Seeking Poll!</h3>
                            <div class="widget-content">
                                    <div class="seeking-answer">
                                            <span class="seeking-answer-group">
                            <span class="seeking-answer-input">
                               <input class="seeking-radiobutton" type="radio">
                            </span>
                                            <label for="" class="seeking-input-label">
                                    <span class="seeking-answer-span">Frequently</span>
                            </label>
                                            </span>
                                            <span class="seeking-answer-group">
                            <span class="seeking-answer-input">
                               <input class="seeking-radiobutton" type="radio">
                            </span>
                                            <label for="" class="seeking-input-label">
                                    <span class="seeking-answer-span">Interviewing</span>
                            </label>
                                            </span>
                                            <span class="seeking-answer-group">
                            <span class="seeking-answer-input">
                               <input class="seeking-radiobutton" type="radio">
                            </span>
                                            <label for="" class="seeking-input-label">
                                    <span class="seeking-answer-span">Leaving a familiar workplace</span>
                            </label>
                                            </span>
                                            <div class="seeking_vote">
                                                    <a class="seeking-vote-button">Vote</a>
                                            </div>
                                    </div>
                            </div>
                    </div>-->
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-8">
                    <div class="grid_1" style="padding: 10px;">
                        <h3>Featured Employers</h3>                        
                    </div>
                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4><a href="single.html">It is a long established fact</a></h4>
                            <h6>SIt is a long <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Share</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweet</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Share</span>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4><a href="single.html">It is a long established fact</a></h4>
                            <h6>SIt is a long <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Share</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweet</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Share</span>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4><a href="single.html">It is a long established fact</a></h4>
                            <h6>SIt is a long <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Share</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweet</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Share</span>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div><div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4><a href="single.html">It is a long established fact</a></h4>
                            <h6>SIt is a long <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Share</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweet</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Share</span>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div><div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4><a href="single.html">It is a long established fact</a></h4>
                            <h6>SIt is a long <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Share</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweet</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Share</span>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="col-md-3 grid_3">
                    <h4>Navigate</h4>
                    <ul class="f_list f_list1">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="login.html">Sign In</a></li>
                        <li><a href="login.html">Join Now</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                    <ul class="f_list">
                        <li><a href="features.html">Features</a></li>
                        <li><a href="terms.html">Terms of use</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="jobs.html">Post a Job</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 grid_3">
                    <h4>Twitter Widget</h4>
                    <div class="footer-list">
                        <ul>
                            <li><i class="fa fa-twitter tw1"> </i>
                                <p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p>
                            </li>
                            <li><i class="fa fa-twitter tw1"> </i>
                                <p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p>
                            </li>
                            <li><i class="fa fa-twitter tw1"> </i>
                                <p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 grid_3">
                    <h4>Seeking</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
                <div class="col-md-3 grid_3">
                    <h4>Sign up for our newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
                    <form>
                        <input type="text" class="form-control" placeholder="Enter your email">
                        <button type="button" class="btn red">Subscribe now!</button>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--<div class="footer_bottom">
                <div class="container">
                        <div class="col-sm-2">
                                <ul class="f_list2">
                                        <li><a href="jobs.html">Russia Jobs</a></li>
                                        <li><a href="jobs.html">Australia Jobs</a></li>
                                        <li><a href="jobs.html">Srilanka Jobs</a></li>
                                        <li><a href="jobs.html">Poland Jobs</a></li>
                                </ul>
                        </div>
                        <div class="col-sm-2">
                                <ul class="f_list2">
                                        <li><a href="jobs.html">New Zealand Jobs</a></li>
                                        <li><a href="jobs.html">Pakistan Jobs</a></li>
                                        <li><a href="jobs.html">Srilanka Jobs</a></li>
                                        <li><a href="jobs.html">Irland Jobs</a></li>
                                </ul>
                        </div>
                        <div class="col-sm-2">
                                <ul class="f_list2">
                                        <li><a href="jobs.html">Canada Jobs</a></li>
                                        <li><a href="jobs.html">Germany Jobs</a></li>
                                        <li><a href="jobs.html">China Jobs</a></li>
                                        <li><a href="jobs.html">Nepal Jobs</a></li>
                                </ul>
                        </div>
                        <div class="col-sm-6 footer_text">
                                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="copy">
                                <p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                        </div>
                </div>
        </div>-->

        <div id="modalSesion" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Inicio de Sesión</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="User123">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="contraseña123">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Iniciar Sesión</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>

            </div>
            <!--/.modal fade-->
        </div>
    </body>
</html>
