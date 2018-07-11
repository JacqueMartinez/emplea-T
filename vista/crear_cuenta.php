<!DOCTYPE HTML>
<?php
include_once '../controladores/ControladorEstructura.php';
?>
<html>
    <?php echo ControladorEstructura::getHeader();?>
    <body>
        <?php echo ControladorEstructura::getNavbar();?>

            <div class="container">
            <div class="single">
                <div class="form-container">
                    <h2>Registro</h2>
                    
                    <div class="col-md-9 col-md-offset-2">

                        <form action="../controladores/ControladorRegistro.php" action="POST">
                            <div class="row">                           
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" >Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" path="firstName" name="nombre" class="form-control input-sm" required="true"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" >Apellido Paterno</label>
                                    <div class="col-md-9">
                                        <input type="text" path="lastName" name="paterno" class="form-control input-sm" required="true"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" >Apellido Materno</label>
                                    <div class="col-md-9">
                                        <input type="text" path="aMaterno" name="materno" class="form-control input-sm" required="true"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" >Correo</label>
                                    <div class="col-md-9">
                                        <input type="text" path="email" name="email" class="form-control input-sm" required="true"/>
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" >Contraseña</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="pass" placeholder="Máximo 15 caracteres" required="true"/>
                                    </div>
                                </div>      
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" >Confirmar contraseña</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="confirmar" placeholder="Repetir contraseña" required="true"/>
                                    </div>
                                </div>      
                            </div>

                        

                            <div class="row">
                                <div class="form-group col-md-12">
                                <div class="form-actions floatRight">
                                    <input type="submit" value="Registrarse" class="btn btn-primary btn-sm pull-right">
                                </div>
                                </div>
                            </div>
                        </form>
                </div>
                </div>
            </div>
        </div>
      
        
      <?php echo ControladorEstructura::getFooter();?>
       
    </body>
</html>

