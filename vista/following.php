<?php
require_once '../controladores/Estructura_ctrl.php';
$navbar = Estructura_ctrl::navbar();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal Category Flat Bootstrap Responsive Website Template | Following :: w3layouts</title>
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
<?php echo $navbar; ?>
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
<div class="container">
    <div class="single">
      <div class="col-sm-10 follow_left">
			<h3>Recent Jobs</h3>
             <div class="follow_jobs">
			    <a href="follow_single.html">
					<img src="images/f1.jpg" alt="" class="img-circle img-responsive">
					<div class="title">
						<h5>Web Designer</h5>
						<p>Amazon Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>New York City</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>45,000</span>
					</div>
				</a>
				<a href="follow_single.html">
					<div class="featured"></div>
					<img src="images/f2.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Senior Web Developer</h5>
						<p>Dropbox Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Los Angeles</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>85,000</span>
					</div>
				</a>
				<a href="follow_single.html">
					<img src="images/f3.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Project Manager</h5>
						<p>Apple Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>San Francisco</span>
						<span class="type freelance"><i class="fa fa-clock-o"></i>Freelance</span>
						<span class="sallary"><i class="fa fa-dollar"></i>60,000</span>
					</div>
				</a>
				<a href="follow_single.html">
					<img src="images/f4.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Key Account Manager</h5>
						<p>Dell Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Boston</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>55,000</span>
					</div>
				</a>
				<a href="follow_single.html">
					<div class="featured"></div>
					<img src="images/f1.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Front End Developer</h5>
						<p>Ebay Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Chicago</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>75,000</span>
					</div>
				</a>
				<a href="follow_single.html" class="hidden-job">
					<img src="images/f2.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Web Designer</h5>
						<p>Amazon Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>New York City</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>45,000</span>
					</div>
				</a>
				<a href="follow_single.html" class="hidden-job">
					<img src="images/f3.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Senior Web Developer</h5>
						<p>Dropbox Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Los Angeles</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>85,000</span>
					</div>
				</a>
				<a href="follow_single.html" class="hidden-job">
					<img src="images/f4.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Project Manager</h5>
						<p>Apple Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>San Francisco</span>
						<span class="type freelance"><i class="fa fa-clock-o"></i>Freelance</span>
						<span class="sallary"><i class="fa fa-dollar"></i>60,000</span>
					</div>
				</a>
				<a href="follow_single.html" class="hidden-job">
					<img src="images/f1.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Key Account Manager</h5>
						<p>Dell Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Boston</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>55,000</span>
					</div>
				</a>
				<a href="follow_single.html" class="hidden-job">
					<img src="images/f2.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Front End Developer</h5>
						<p>Ebay Inc.</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Chicago</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i>75,000</span>
					</div>
				</a>
				<ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
			   </ul>
		    </div>
		</div>
		<div class="col-sm-2">
			<h4 class="m_1">Career level</h4>
			<table class="table">
                    <tbody>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Senior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Middle
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                </tbody>
             </table>
             <h4 class="m_1">Job type</h4>
             <table class="table">
                    <tbody>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Senior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Middle
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                </tbody>
             </table>
             <h4 class="m_1">Location</h4>
             <table class="table">
                    <tbody>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Senior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Middle
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Junior
                            </td>
                            <td>
                                (56)
                            </td>
                        </tr>
                </tbody>
             </table>
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
</div>
</body>
</html>
