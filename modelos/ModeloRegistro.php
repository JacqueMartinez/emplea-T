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

    public function RegistrarUsuario($datos) {

        //Se declara esta variable como boolean para verificar si la inserción fue exitosa;
        $insertado = false;

        //Sentencia sql para INSERTAR un nuevo usario
        $sql = "INSERT INTO `usuario`(`usuario_id`, `nombre`, `paterno`, `materno`, `correo`, `password`) VALUES (NULL,'".$datos["nombre"]."', '".$datos["paterno"]."', '".$datos["materno"]."', '".$datos["email"]."', md5('".$datos["pass"]."'))";

        try {
            if (ConexionBD::conectarBD()->exec($sql)) {
                $insertado = true;
            }
        } catch (PDOException $ex) {
            var_dump($ex->getMessage());
        }
        return $insertado;
    }

}
