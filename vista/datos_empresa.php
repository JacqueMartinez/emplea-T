<?php include_once '../controladores/ControladorEstructura.php';?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal Category Flat Bootstrap Responsive Website Template | Features :: w3layouts</title>
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

        <?php echo ControladorEstructura::getNavbar();?>
        <!-- Descripcion de la empresa-->
        <div class="container">
            <div class="single">
                <div class="form-container">
                    <div class="row col-md-9">
                    <h2>Mi Empresa</h2>
                    <div  class="col-md-10 form-group col-md-offset-2">
                        <form action="../controladores/ControladorRegistro.php" action="POST">
                            <div class="perfil">
                            <img src="images/empresa.gif" style="width: 200px; height: 160px;"/>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a> Nombre / Razon social :</a>
                                </div>
                                <div class="col-md-8 control-lable">
                                    <h4>Empresa avicola de Tehuacan</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Direccion :</a>
                                </div>
                                <div class="col-md-8">
                                    <h4>Av. Nacional col. El Obrero no.1133 San Pablo Tepetzingo</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Telefono :</a>
                                </div>
                                <div class="col-md-8">
                                    <h4>(238) 381 8647 - 383 3767</h4>
                                </div>
                                                          
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Giro :</a>
                                </div>
                                <div class="col-md-8 control-lable" >
                                    <h4 >Empresa dedicada a ....</h4>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4 control-lable">
                                    <a>Horario :</a>
                                </div>
                                <div  class="col-md-8 control-lable">    
                                    <h4>.....</h4>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-md-4"></div>
                                <div class=" col-md-8 social-icons" >
                                    <a>Visítanos &nbsp;</a>
                                    <a href="#" class="fa fa-facebook" target="_blank"></a>&nbsp;
                                    <a href="#" class="fa fa-twitter" target="_blank"></a>
                                </div>
                                <h4 class="col-md-12 control-lable"></h4>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-actions col-md-12">
                                <div class="col-md-6" style="">
                                    <a href="index.php" class="btn btn-default pull-left" data-toggle="" data-target="">Regresar</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-default pull-left" data-toggle="" data-target="">Editar</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-10 control-lable">
                            <h2></h2>
                        </div>
                    </form>
                </div>
                </div>
                    <!--Segunda seccion -->
                <div class="col-md-3">
                    <div>
                        <div style="color: #00aced;" >
                            <img src="" height="150">
                            <h4 href="">Mis Ofertas de empleo</h4>
                            
                        </div><hr>
                        <div>
                            <p>Solicito auxiar contable</p>
                        </div><br>
                        <div>
                            <p>Solicito Obreros en ..</p>
                        </div>
                        <div><br>
                            <p>Solicito Adimistrador de Empresas</p>
                        </div>
                    </div>
                </div>
                    <!-- Fin de la 2da seccion-->
              </div>
            </div>
        </div>
    
        <?php echo ControladorEstructura::getFooter();?>
        
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
<!--<div class="container">
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
	   	  <div class="widget">
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
    	</div>
	 </div>
	 <div class="col-md-8 single_right">
	    <h3>Features</h3>
	    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
	    <h5>Requirements</h5>
	    <ul class="feature_list">
			<li>There are many variations of passages of Lorem Ipsum available.</li>
			<li>It is a long established fact that a reader.</li>
			<li>Nulla rutrum nisi mi, iaculis commodo nibh lobortis sed.</li>
			<li>Sed pulvinar, nunc vitae molestie dapibus, lacus dolor dignissim sapien.</li>
			<li>Pellentesque ipsum ex, imperdiet quis consequat sed, consectetur ut ante.</li>
			<li>Aliquam libero felis, mollis vitae elementum vel, bibendum eu tortor.</li>
			<li>Lorem ipsum dolor sit amet.</li>
		</ul>
		<h5>Benefits</h5>
		<ul class="feature_list">
			<li>Aliquam rhoncus justo eget tellus scelerisque, at mollis mi aliquam.</li>
			<li>Quisque pretium convallis pulvinar.</li>
			<li>Nulla rutrum nisi mi, iaculis commodo nibh lobortis sed.</li>
			<li>Sed pulvinar, nunc vitae molestie dapibus, lacus dolor dignissim sapien.</li>
			<li>Pellentesque ipsum ex, imperdiet quis consequat sed, consectetur ut ante.</li>
			<li>Aliquam libero felis, mollis vitae elementum vel, bibendum eu tortor.</li>
			<li>Morbi rhoncus luctus interdum.</li>
		</ul>
     </div>
     <div class="clearfix"> </div>
 </div>
</div>-->
<!--<div class="footer">
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
</div>-->
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