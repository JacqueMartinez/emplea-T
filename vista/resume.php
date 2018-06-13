<!--<?php
require_once '../controladores/Estructura_ctrl.php';
$navbar = Estructura_ctrl::navbar();
?>-->
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal Category Flat Bootstrap Responsive Website Template | Resume :: w3layouts</title>
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
<?php echo $navbarx; ?>
<div class="banner_1">
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
</div>
<!--<div class="container">
    <div class="single">
	   <div class="form-container">
        <h2>Upload Your Resume</h2>
        <div class="search_form1">
		    <form action="">
			  <input type="text" class="text" placeholder=" " value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"><br>
			  <input type="file" name="myfile">
			  <input type="submit" value="Post your CV">
	        </form>
	    </div>
    </div>
 </div>
</div>-->
<!--contenido-->
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Busco empleo</h2>
        <form>
            <div class="row">
                <div class="form-group col-md-12">
                    <label class="col-md-3 control-lable" for="direccion">Direcciòn</label>
                    <div class="col-md-9">
                        <input type="text" path="direccion" id="direccion" class="form-control input-sm"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label class="col-md-3 control-lable" for="direccion">Telefono</label>
                    <div class="col-md-9">
                        <input type="text" path="direccion" id="direccion" class="form-control input-sm"/>
                    </div>
                </div>
            </div>
              <div class="row">
                                <div class="form-group col-md-12">
                                 <label class="col-md-3 control-lable" for="tipoCuenta">Escolaridad</label>
                                <div class="col-md-9">
                                    <select path="tipoCuenta" id="tipoEmpleo" class="form-control input-sm">                                        
                                        <option value="">seleccionar una opcion </option>
                                        <option value="">Preescolar</option>
                                        <option value="">Primaria</option>
                                        <option value="">Secundaria</option>
                                        <option value="">Bachillerato</option>
                                        <option value="">Profesional tecnico</option>
                                         <option value="">Licenciatura</option>
                                          <option value="">Posgrado</option>
                                           <option value="">Maestria</option>
                                            <option value="">Doctorado</option>
                                    </select>
                                </div>  
                                </div>
                            </div>
            <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="search_form1">
		    <form action="">
			  <!--<input type="text" class="text" placeholder=" " value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"><br>-->
			  <input type="file" name="myfile">
                    </form>
                     </div>
                     </div>
                <div class="col-md-2">
                    <input type="submit" value="Subir CV" btn-danger>
                </div>
               
                <div class="col-md-4">
                      <div class="form-actions floatRight">
                          
                                     <a href="" data-toggle="modal" data-target="#modalcategoria" type="submit "class=" btn btn-primary btn-info btn-danger">Especialidad</a>
                      </div>
                </div> 
            </div>
             <div class="row">
                                <div class="form-group col-md-12">
                                <div class="form-actions floatRight" class="">
                                    <input type="submit" value="Buscar" class="btn btn-primary btn-danger">
                                </div>
                                </div> 
             </div>
        </form>
    </div>
 </div>
</div>
<!--modal-->
<div id="modalcategoria" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Area de trabajo</h4>
					</div>
					<div class="modal-body">
						<form class="form-container">
							<div class="form-group col-md-12">
                                                                <div class="col-md-12">
	   	  <div class="widget_search">
			<div class="widget-content">
				<span>Area</span>
                <select class="form-control jb_1">
					<option value="1">Administrativos</option>
					<option value="2">Biología</option>
					<option value="3">Comunicaciones</option>
					<option value="4">Contabilidad</option>
                                        <option value="5">Construcción</option>
                                        <option value="6">Creatividad, Producción y Diseño Comercial</option>
                                        <option value="7">Derecho y Leyes</option>
                                        <option value="8">Educación</option>
                                        <option value="9">Ingeniería</option>
                                        <option value="10">Logística, Transportación y Distribución</option>
                                        <option value="11">Manufactura, Producción y Operación</option>
                                        <option value="12">Mercadotecnia, Publicidad y Relaciones Públicas</option>
                                        <option value="13">Recursos Humanos</option>
                                        <option value="14">Salud y Belleza</option>
                                        <option value="15">Sector Salud</option>
                                        <option value="16">Seguro y Reaseguro</option>
                                        <option value="17">Tecnologías de la Información / Sistemas</option>
                                        <option value="18">Turismo, Hospitalidad y Gastronomía</option>
                                        <option value="19">Ventas </option>
                                        <option value="20">Veterinaria / Zoología</option>
                </select>
                <span>Especialidad</span>
                        <select class="form-control jb_1">
					<option value="-1">Selecciona una opción</option>
                                        <option value="358">Estilista</option>
                                        <option value="359">Instructor Deportivo</option>
                                        <option value="360">Manicurista</option>
                                        <option value="361">Masajista</option>
                                        <option value="363">Pedicurista</option>
                                        <option value="364">Spa</option>
                                        <option value="365">Terapeuta</option>
				</select>
			</div>
                  </div>
	   </div>
                                                         </div>
						  </div>
						  <div class="form-group">
						    <div class="col-md-6">
						      <button type="submit" class="btn btn-default">Aceptar</button>
						    </div>
						  </div>
							
					
				
					<div class="modal-footer">
						<button type="button" class="btn btn-default danger" data-dismiss="modal">Cerrar</button>
					</div>
                                    </div>
				</div>

			</div>
			<!--/.modal fade-->
		</div>
<!--modal-->
<!--contenido-->
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
<div class="footer_bottom">	
  <!--<div class="container">
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
  </div>-->
</div>
</body>
</html>
