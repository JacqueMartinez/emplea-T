<?php
require_once 'ConexionBD.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estilo_mdl
 *
 * @author Cesar
 */
class Estilo_mdl {
    
    public function obtenerEstilo (){
        
        $estilo = ConexionBD::conectarBD() ->prepare("SELECT * FROM estilos");
        $estilo->execute();
        return $estilo ->fetchAll();
        $estilo->close();
        
    }
}
