<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionBD
 *
 * @author Cesar
 */
class ConexionBD {
    
    public function conectarBD() {
		$link = new PDO("mysql:host=localhost;dbname=empleat","root","",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $link;
	}
}
