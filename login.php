<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ERROR);
define("BASE_DIR",sprintf("%s".DIRECTORY_SEPARATOR,dirname(__FILE__)));


$dataDir = getenv("DATA_DIR");
define ("DATA_DIR",$dataDir);
//die(DATA_DIR.DIRECTORY_SEPARATOR.'config.php');
if(file_exists(DATA_DIR.DIRECTORY_SEPARATOR.'config.php')){
	require_once DATA_DIR.DIRECTORY_SEPARATOR.'config.php';
}
else{ 
	die("Il File di configurazione ".DATA_DIR.DIRECTORY_SEPARATOR.'config.php'." non è stato trovato.");
	
}	
	

require_once LIB_DIR.DIRECTORY_SEPARATOR."utils.class.php";
?>