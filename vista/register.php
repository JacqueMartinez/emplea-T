<?php 
//require_once '../controladores/Estructura_ctrl.php';
//$navbar = Estructura_ctrl::navbar();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Emplea - T | Empleos en Tehuacán</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!----font-Awesome----->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!----font-Awesome----->
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
      						<li><a href="#">Publicar oferta</a></li>
      		        <li><a href="login.php">Iniciar sesíon</a></li>
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
        <!--<div class="banner_1">
                <div class="container">
                        <div id="search_wrapper1">
                           <div id="search_form" class="clearfix">
                            <h1>Start your job search</h1>
                            <p>
                                 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                                 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                                 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                                </p>
                   </div>
                        </div>
           </div>
        </div>-->
        <div class="container">
            <div class="single">
                <div class="form-container">
                    <h2>Registro</h2>
                    <form>
                        <div class="row">                           
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="firstName">Nombre</label>
                                <div class="col-md-9">
                                    <input type="text" path="firstName" id="firstName" class="form-control input-sm"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="lastName">Apellido Paterno</label>
                                <div class="col-md-9">
                                    <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="aMaterno">Apellido Materno</label>
                                <div class="col-md-9">
                                    <input type="text" path="aMaterno" id="aMaterno" class="form-control input-sm"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="email">Correo</label>
                                <div class="col-md-9">
                                    <input type="text" path="email" id="email" class="form-control input-sm"/>
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="email">Contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="contraseña123">
                                </div>
                            </div>      
			</div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="email">Confirmar contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="contraseña123">
                                </div>
                            </div>      
			</div>
                        
                        <!-- SECCIONES SIN UTILIZAR
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="country">Country</label>
                                <div class="col-md-9">
                                    <select path="country" id="country" class="form-control input-sm">
                                        <option value="">Select Country</option>
                                        <option value="">Japan</option>
                                        <option value="">Kenya</option>
                                        <option value="">Dubai</option>
                                        <option value="">Italy</option>
                                        <option value="">Greece</option>
                                        <option value="">Iceland</option>
                                        <option value="">China</option>
                                        <option value="">Doha</option>
                                        <option value="">Irland</option>
                                        <option value="">Srilanka</option>
                                        <option value="">Russia</option>
                                        <option value="">Hong Kong</option>
                                        <option value="">Germany</option>
                                        <option value="">Canada</option>
                                        <option value="">Mexico</option>
                                        <option value="">Nepal</option>
                                        <option value="">Norway</option>
                                        <option value="">Oman</option>
                                        <option value="">Pakistan</option>
                                        <option value="">Kuwait</option>
                                        <option value="">Indonesia</option>
                                        <option value="">Spain</option>
                                        <option value="">Thailand</option>
                                        <option value="">Saudi Arabia</option>
                                        <option value="">Poland</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="country">Work Experience</label>
                                <div class="col-md-9">
                                    <select path="country" id="country" class="form-control input-sm">
                                        <option value="">Select</option>
                                        <option value="">Fresher</option>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                        <option value="">9</option>
                                        <option value="">10</option>
                                        <option value="">11</option>
                                        <option value="">12</option>
                                        <option value="">13</option>
                                        <option value="">14</option>
                                        <option value="">15</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="country">Education</label>
                                <div class="col-md-9">
                                    <select path="country" id="country" class="form-control input-sm">
                                        <option value="">Select</option>
                                        <option value="">Bsc</option>
                                        <option value="">BTech</option>
                                        <option value="">Mca</option>
                                        <option value="">BCA</option>
                                        <option value="">Diploma</option>
                                        <option value="">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="subjects">Subjects</label>
                                <div class="col-md-9 sm_1">
                                    <textarea cols="77" rows="6" value=" " onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = '';
                                            }"> </textarea>

                                </div>
                            </div>
                        </div>-->                        
                        <!--<div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="email">CV</label>
                                <div class="col-md-9">
                                    <input type="file" name="myfile">
                                </div>
                            </div>
                        </div>-->
                        
                        <div class="row">
                            <div class="form-actions floatRight">
                                <input type="submit" value="Registrarse" class="btn btn-primary btn-sm">
                            </div>
                        </div>
                    </form>
                </div>
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
                            <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                            <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                            <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
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
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
                </div>
                <div class="clearfix"> </div>
                <div class="copy">
                    <p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
            </div>
        </div>-->
    </body>
</html>
