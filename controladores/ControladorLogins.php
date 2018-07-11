<?php

session_start(); //Se inicia una sesión
require_once '../modelos/ModeloLogin.php';

if (isset($_POST['formLogin'])) { //Se verifica que el input del modal de login sea recibido          
// Se definen las variables $email y $password y se llama al metodo validarUsuario
        $email = $_POST['email'];
        $password = $_POST['password'];
        ControladorLogins::validarUsuario($email, $password);    
}

if (isset($_GET['exit'])){
    session_destroy();
    header('Location: http://localhost/Seeking/php/vista/');
}

/**
 * Description of ControladorLogins
 *
 * @author Cesar
 */
class ControladorLogins {

    function validarUsuario($email, $password) {
        ModeloLogin::validarUsuario($email, $password);
    }
    
    function cerrarSesion(){
        
    }
}
