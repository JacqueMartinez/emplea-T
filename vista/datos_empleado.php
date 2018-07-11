<?php include_once '../controladores/ControladorEstructura.php';?>
<!DOCTYPE HTML>
<html>
    <?php echo ControladorEstructura::getHeader();?>
    <body>
        <?php echo ControladorEstructura::getNavbar();?>
        <!-- Abel : Desde aqui comenze a editar-->
        <div class="container">
            <div class="single">
                <div class="form-container">
                    <h2>Mi Cuenta</h2>
                    <form>
                        <div class="perfil">
                            <img src="images/perfil.png">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12" style="color: #003cb3">
                                <a class="col-md-3"></a>
                                <h5 class="col-md-2 control-lable" for="firstName">Usuario :</h5>
                                
                                <div class="col-md-4">
                                    
                                    <label class="col-md-3 control-lable" for="">abelGlz9950</label>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12" style="color: #003cb3">
                                <a class="col-md-3"></a>
                                <h5 class="col-md-2 control-lable" for="lastName">Nombre :</h5>
                                <div class="col-md-4">
                                    
                                    <label class="col-md-3 control-lable" for="">Abel</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12" style="color: #003cb3">
                                <a class="col-md-3"></a>
                                <h5 class="col-md-2 control-lable" for="lastName">Apellido Paterno :</h5>
                                <div class="col-md-4">
                                    
                                    <label class="col-md-3 control-lable" for="">Gonzalez</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12" style="color: #003cb3">
                                <a class="col-md-3"></a>
                                <h5 class="col-md-2 control-lable" >Apellido Materno :</h5>
                                <div class="col-md-4">
                                    
                                    <label class="col-md-3 control-lable" for="">Esperon</label>
                                </div>
                            </div>
                        </div>                        
                        
                        <div class="row">
                            <div class="form-group col-md-12" style="color: #003cb3">
                                <a class="col-md-3"></a>
                                <h5 class="col-md-2 control-lable" for="Logo">Correo :</h5>
                                <div >                                    
                                    <div class="col-md-4">
                                        
                                        <label class="col-md-3 control-lable" for="">abel21ge@gmail.com</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-actions floatRight">
                                    <input type="submit" value="Editar" class="btn btn-primary btn-sm">
                                <input type="submit" value="Guardar" class="btn btn-primary btn-sm">
                            </div>
                        </div>
                        <br>
                        <h2></h2>
                        
                      
                       
                        <!--    <div class="row">
                        
                                <div class="search_form1">                                    
                                    <div class="col-md-9">
                                        <input type="file" name="myfile">                                            
                                    </div>
                                </div>
                        
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="firstName">Facebook</label>
                                    <div class="col-md-6">
                                        <input type="text"  id="firstName" class="form-control input-sm"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="firstName">Twiter</label>
                                    <div class="col-md-6">
                                        <input type="text"  id="firstName" class="form-control input-sm"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="firstName">YouTube</label>
                                    <div class="col-md-6">
                                        <input type="text"  id="firstName" class="form-control input-sm"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="firstName">Sitio Web</label>
                                    <div class="col-md-6">
                                        <input type="text"  id="firstName" class="form-control input-sm"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-actions floatRight">
                                    <input type="submit" value="Guardar" class="btn btn-primary btn-sm">
                                </div>
                            </div> -->
                        </form>        
                </div>
            </div>
        </div>
    






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
   </div>	
   <div class="container">
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
               <h3>Recruiters</h3>	
               <ul class="feature_list">
                           <li><a href="#">There are many variations of passages of Lorem Ipsum available.</a></li>
                           <li><a href="#">It is a long established fact that a reader.</a></li>
                           <li><a href="#">Nulla rutrum nisi mi, iaculis commodo nibh lobortis sed.</a></li>
                           <li><a href="#">Sed pulvinar, nunc vitae molestie dapibus, lacus dolor dignissim sapien.</a></li>
                           <li><a href="#">Pellentesque ipsum ex, imperdiet quis consequat sed, consectetur ut ante.</a></li>
                           <li><a href="#">Aliquam libero felis, mollis vitae elementum vel, bibendum eu tortor.</a></li>
                           <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                   </ul>
               <h5>Job Seekers</h5>   
               <ul class="feature_list feature_list1">
                           <li><a href="#">There are many variations of passages of Lorem Ipsum available.</a></li>
                           <li><a href="#">It is a long established fact that a reader.</a></li>
                           <li><a href="#">Nulla rutrum nisi mi, iaculis commodo nibh lobortis sed.</a></li>
                           <li><a href="#">Sed pulvinar, nunc vitae molestie dapibus, lacus dolor dignissim sapien.</a></li>
                           <li><a href="#">Pellentesque ipsum ex, imperdiet quis consequat sed, consectetur ut ante.</a></li>
                           <li><a href="#">Aliquam libero felis, mollis vitae elementum vel, bibendum eu tortor.</a></li>
                           <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                   </ul>
                   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                   <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                   <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,</p>
                   <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                   <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                   <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,</p>
                   <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
   </div> -->
    <!-- Aqui empieza el footer (abel)-->
            <?php echo ControladorEstructura::getFooter();?>
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
    </div> -->
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

