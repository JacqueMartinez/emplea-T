<?php

require_once '../database/ConexionBD.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeloLogin
 *
 * @author Cesar
 */
class ModeloLogin {

    public function validarUsuario($email, $password) {
        $encriptada = md5($password); //Es necesario ncriptar la contraseña que el usuario ingresa para compararla con la contraseña encriptada de la tabla                         
        try {
            $statement = ConexionBD::conectarBD()->prepare('SELECT * FROM usuario WHERE correo = ? AND password = ?'); //Se prepara la consulta almacenada en la variable $sql
            $statement->bindParam(1, $email);
            $statement->bindParam(2, $encriptada); //Aqui se pasan los parametros del metodo para usarlos en la consulta            
            $statement->execute(); //Se ejecuta la consulta            
            $usuario = $statement->fetch(PDO::FETCH_ASSOC);
            if ($usuario === false) {
               header('Location: http://localhost/Emplea-T/vista/?login=error');
            } else {
                $_SESSION['usuario'] = $usuario['usuario_id'];
                $_SESSION['nombre'] = $usuario['nombre'];
                header('Location: http://localhost/Emplea-T/vista');
            }
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

}
