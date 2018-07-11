<?php

//Primero debemos instanciar la clase del modelo de registro, cada controlador debe tener un modelo
require_once '../modelos/ModeloRegistro.php';

//Verificar el contenido del array que proviene del archivo [registro.php]
if (isset($_POST['formRegistro'])) {
    //Por comodidad asigno el contenido de la variable superglobal $_POST a una nueva variable
    $datos = $_POST;
    
//Verificar que las contraseñas coincidan
    if ($datos["pass"] != $datos["rpass"]) {
        header('Location: http://localhost/Seeking/php/vista/registro.php?password=error');
    } else {
        ControladorRegistro::registrarUsuario($datos);
    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorRegistro
 *
 * @author Cesar
 */
class ControladorRegistro {

    public function registrarUsuario($datos) {        
        ModeloRegistro::verificarUsuario($datos);          
        }
    }
