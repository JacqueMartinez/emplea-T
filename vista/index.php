<?php
include_once '../controladores/ControladorLogins.php';
include_once '../controladores/ControladorEstructura.php';

?>
    <!DOCTYPE HTML>
    <html>
    <?php echo ControladorEstructura::getHeader(); ?>

    <body>
        <?php echo ControladorEstructura::getNavbar(); ?>
        <div class="container">
            <div class="grid_1">
                <h3>Empresas contratando</h3>
                <ul id="flexiselDemo3">
                    <li>
                        <img src="images/sld01.png" class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/sld02.jpg" class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/sld03.png" class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/sld04.jpg" class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/sld05.png" class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/sld06.png" class="img-responsive" />
                    </li>

                </ul>
                <script type="text/javascript">
                    $(window).load(function () {
                        $("#flexiselDemo3").flexisel({
                            visibleItems: 5,
                            animationSpeed: 2000,
                            autoPlay: true,
                            autoPlaySpeed: 2000,
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
                        <h3>Últimas ofertas publicadas</h3>
                        <ul class="list_1">
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Estamos contratando</a>
                            </li>
                            <li>
                                <a href="#">Solicito encargado de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
                            <li>
                                <a href="#">Solicito personal en el area de..</a>
                            </li>
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
                        <h3>Ofertas exclusivas</h3>
                    </div>
                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->

                        <div class="clearfix"> </div>
                    </div>
                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4>
                                <a href="single.html">Busco trabajo en ...</a>
                            </h4>
                            <h6>Llámame...
                                <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>Tengo experiencia en ....</p>
                            <!-- ELIMINAR LAS REDES SOCIALES -->
<!--                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Comparte</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweetea</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Comparte</span>
                                </a>
                            </div>-->
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4>
                                <a href="single.html">Busco trabajo en ...</a>
                            </h4>
                            <h6>Llámame...
                                <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>Tengo experiencia en ....</p>
<!--                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Comparte</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweetea</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Comparte</span>
                                </a>
                            </div>-->
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4>
                                <a href="single.html">Busco trabajo en ...</a>
                            </h4>
                            <h6>Llámame...
                                <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>Tengo experiencia en ....</p>
<!--                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Comparte</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweetea</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Comparte</span>
                                </a>
                            </div>-->
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col_1">
                        <!--<div class="col-sm-4 row_2">
                                <a href="single.html"><img src="images/a1." class="img-responsive" alt=""/></a>
                        </div>-->
                        <div class="col-sm-8 row_1">
                            <h4>
                                <a href="single.html">Busco trabajo en ...</a>
                            </h4>
                            <h6>Llámame...
                                <span class="dot">·</span> Jul. 31, 2015</h6>
                            <p>Tengo experiencia en ....</p>
<!--                            <div class="social">
                                <a class="btn_1" href="#">
                                    <i class="fa fa-facebook fb"></i>
                                    <span class="share1 fb">Comparte</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-twitter tw"></i>
                                    <span class="share1">Tweetea</span>
                                </a>
                                <a class="btn_1" href="#">
                                    <i class="fa fa-google-plus google"></i>
                                    <span class="share1 google">Comparte</span>
                                </a>
                            </div>-->
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col_1">

                    </div>
                    <div class="col_1">
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <?php echo ControladorEstructura::getFooter(); ?>

        <!-- Modal -->
        <div class="modal fade" id="modalSesion" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>&nbsp;
                                <span class="fa fa-lock"></span> Iniciar sesión</h4>
                        </div>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label for="usuario">&nbsp;
                                    <span class="fa fa-user"></span> Correo electrónico</label>
                                <input type="text" class="form-control" name="email" placeholder="Ingresar correo electrónico" required="true" />
                            </div>
                            <div class="form-group">
                                <label for="psw">&nbsp;
                                    <span class="fa fa-key"></span> Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control pwd" name="password" id="psw" placeholder="Ingresar contraseña" required="true"
                                    />
                                    <span class="input-group-btn">
                                        <button class="btn  reveal" type="button">
                                            <i class="fa fa-eye" id="icono"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <!--                            <div class="form-group">
                                                            <label><input type="checkbox" value="Recordar">&nbsp; Recordarme</label>
                                                        </div>-->
                            <div class="form-group">
                                <input type="submit" name="formLogin" value="Iniciar sesión" class="btn btn-primary btn-sm pull-right">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>-->
                        <h6>¿No tienes cuenta?
                            <a href="registro.php">Crear una cuenta</a>
                        </h6>
                        <!--<h6><a href="#">Olvidé mi contraseña</a></h6>-->
                    </div>
                </div>

            </div>
        </div>
        <!--End Modal -->

        <!-- Modal  con errores -->
        <div class="modal fade" id="modalSesionError" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>&nbsp;
                                <span class="fa fa-lock"></span> Iniciar sesión</h4>
                        </div>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <strong>Error: </strong> El email o contraseña son incorrectos
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="usuario">&nbsp;
                                    <span class="fa fa-user"></span> Correo electrónico</label>
                                <input type="text" class="form-control" name="email" placeholder="Ingresar correo electrónico" required="true" />
                            </div>
                            <div class="form-group">
                                <label for="psw">&nbsp;
                                    <span class="fa fa-key"></span> Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control pwd" name="password" id="psw" placeholder="Ingresar contraseña" required="true"
                                    />
                                    <span class="input-group-btn">
                                        <button class="btn  reveal" type="button">
                                            <i class="fa fa-eye" id="icono"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <!--                            <div class="form-group">
                                                            <label><input type="checkbox" value="Recordar">&nbsp; Recordarme</label>
                                                        </div>-->
                            <div class="form-group">
                                <input type="submit" name="formLogin" value="Iniciar sesión" class="btn btn-primary btn-sm pull-right">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>-->
                        <h6>¿No tienes cuenta?
                            <a href="registro.php">Crear una cuenta</a>
                        </h6>
                        <!--<h6><a href="#">Olvidé mi contraseña</a></h6>-->
                    </div>
                </div>

            </div>
        </div>
        <!-- End Modal con errores-->

        <!-- Modal  desde registro -->
        <div class="modal fade" id="modalDesdeRegistro" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>&nbsp;
                                <span class="fa fa-lock"></span> Iniciar sesión</h4>
                        </div>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <div class="alert alert-success">
                                    <strong>Cuenta creada: </strong> Por favor inicia sesión para continuar
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="usuario">&nbsp;
                                    <span class="fa fa-user"></span> Correo electrónico</label>
                                <input type="text" class="form-control" name="email" placeholder="Ingresar correo electrónico" required="true" />
                            </div>
                            <div class="form-group">
                                <label for="psw">&nbsp;
                                    <span class="fa fa-key"></span> Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control pwd" name="password" id="psw" placeholder="Ingresar contraseña" required="true"
                                    />
                                    <span class="input-group-btn">
                                        <button class="btn  reveal" type="button">
                                            <i class="fa fa-eye" id="icono"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <!--                            <div class="form-group">
                                                            <label><input type="checkbox" value="Recordar">&nbsp; Recordarme</label>
                                                        </div>-->
                            <div class="form-group">
                                <input type="submit" name="formLogin" value="Iniciar sesión" class="btn btn-primary btn-sm pull-right">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>-->
                        <h6>¿No tienes cuenta?
                            <a href="registro.php">Crear una cuenta</a>
                        </h6>                        
                    </div>
                </div>

            </div>
        </div>
        <!-- End Modal desde registro-->

        <script type="text/javascript">
            //Ocultar / Mostrar contraseña
            $(".reveal").on('click', function () {
                var $pwd = $(".pwd");
                var $icono = $("#icono");
                if ($pwd.attr('type') === 'password') {
                    $pwd.attr('type', 'text');
                    $icono.removeClass("fa-eye");
                    $icono.addClass("fa-eye-slash");
                } else {
                    $pwd.attr('type', 'password');
                    $icono.removeClass("fa-eye-slash");
                    $icono.addClass("fa-eye");
                }
            });
        </script>

        <?php
if (isset($_GET['login'])) {
    if (($_GET['login'] == 'error')) {
        ?>
            <script type="text/javascript">
                $("#modalSesionError").modal("show")
            </script>
            <?php } else if ($_GET['login'] == 'registro') {
        ?>
            <script type="text/javascript">
                $("#modalDesdeRegistro").modal("show")
            </script>
            <?php
}
}
?>
    </body>

    </html>