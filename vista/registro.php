<?php
include_once '../controladores/ControladorRegistro.php';
include_once '../controladores/ControladorEstructura.php';
if (isset($_GET['password'])) {
    $error = '';
    if ($_GET['password'] == 'error') {
        $error = '<div class="alert alert-danger">'
                . '<strong>Error: </strong> Las contraseñas no coinciden.'
                . '</div>';
    }
} else if (isset($_GET['email'])) {
    if ($_GET['email'] == 'error') {
        $error = '<div class="alert alert-danger">'
                . '<strong>Error: </strong> Ya existe una cuenta con ese correo electrónico'
                . '</div>';
    }
} else{
    $error = '';
}
?>
<!DOCTYPE HTML>
<html>
    <?php  echo ControladorEstructura::getHeader();?>
    <body>
        <?php echo ControladorEstructura::getNavbar(); ?>
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
                    <?php echo $error ?>
                    <h2>Registro</h2>
                    <form action="../controladores/ControladorRegistro.php" method="POST">
                        <div class="row">                           
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="firstName">Nombre</label>
                                <div class="col-md-9">
                                    <input type="text" path="firstName" name="nombre" class="form-control input-sm" required="true"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="lastName">Apellido Paterno</label>
                                <div class="col-md-9">
                                    <input type="text" path="lastName" name="paterno" class="form-control input-sm" required="true"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="aMaterno">Apellido Materno</label>
                                <div class="col-md-9">
                                    <input type="text" path="aMaterno" name="materno" class="form-control input-sm" required="true"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="email">Correo</label>
                                <div class="col-md-9">
                                    <input type="text" path="email" name="email" class="form-control input-sm" required="true"/>
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="email">Contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="pass" placeholder="Máximo 15 caracteres" required="true"/>
                                </div>
                            </div>      
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="email">Confirmar contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="rpass" placeholder="Repetir contraseña" required="true"/>
                                </div>
                            </div>      
                        </div>  
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="submit" name="formRegistro" value="Registrarse" class="btn btn-primary btn-sm pull-right">
                            </div>      
                        </div>                        
                    </form>
                </div>
            </div>
        </div>        
        <?php echo ControladorEstructura::getFooter(); ?>    
    </body>
</html>

