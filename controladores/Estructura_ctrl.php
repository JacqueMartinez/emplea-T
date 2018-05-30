<?php
require_once 'Estilo_ctrl.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Estilo_ctrl
 *
 * @author Cesar
 */
class Estructura_ctrl {


    public function navbar(){
        $logo = Estilo_ctrl::logo();
        $navbar =  '<nav class="navbar navbar-default" role="navigation">
      	<div class="container">
      	    <div class="navbar-header">
      	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      		        <span class="sr-only">Toggle navigation</span>
      		        <span class="icon-bar"></span>
      		        <span class="icon-bar"></span>
      		        <span class="icon-bar"></span>
      	        </button>
                          <a class="navbar-brand" href="index.php"><img src="'.$logo[0]["logo"].'" alt=""/></a>
      	    </div>
      	    <!--/.navbar-header-->
      	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
      	        <ul class="nav navbar-nav">
      						<li><a href="jobs.php">Empleos</a></li>
      						<li><a href="#">Publicar oferta</a></li>
      		        <li><a href="login.php">Iniciar sesíon</a></li>
      						<li><a href="register.php">Crear cuenta</a></li>
      		        <li><a href="resume.php">Subir curriculum</a></li>
      	        </ul>
      	    </div>
      			<!--/.navbar-collapse-->
      	    <div class="clearfix"> </div>
      	  </div>
      		<!--/.container-->
      </nav>
      <!--/.navbar-default-->';
      return $navbar;
    }
}
