<?php

require_once '../database/ConexionBD.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeloRegistro
 *
 * @author Cesar
 */
class ModeloRegistro {
    
    public function verificarUsuario($datos){        
        try {
            $statement = ConexionBD::conectarBD()->prepare('SELECT * FROM usuario WHERE correo = ?'); //Se prepara la consulta almacenada en la variable $sql
            $statement->bindParam(1, $datos['email']);            
            $statement->execute(); //Se ejecuta la consulta            
            $usuario = $statement->fetch(PDO::FETCH_ASSOC);
            if ($usuario === false) {
                ModeloRegistro::registrarUsuario($datos);
            } else {                
                header('Location: http://localhost/Seeking/php/vista/registro.php?email=error');
            }
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function registrarUsuario($datos) {                        
        try {
            $statement = ConexionBD::conectarBD()->prepare("INSERT INTO `usuario`(`usuario_id`, `nombre`, `paterno`, `materno`, `correo`, `password`) VALUES (NULL,?,?,?,?,?)"); 
            $statement->bindParam(1, $datos['nombre']);
            $statement->bindParam(2, $datos['paterno']);
            $statement->bindParam(3, $datos['materno']);
            $statement->bindParam(4, $datos['email']);
            $statement->bindParam(5, md5($datos['pass']));              
            if ($statement->execute()) {
                header('Location: http://localhost/Seeking/php/vista/?login=registro');
            }
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
        return $insertado;
    }

}
