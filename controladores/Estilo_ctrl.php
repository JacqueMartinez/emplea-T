<?php
require_once '../modelo/Estilo_mdl.php';
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
class Estilo_ctrl {
    public function logo(){
        $estilo_ctrl = Estilo_mdl::obtenerEstilo();
        return $estilo_ctrl;
    }
}
