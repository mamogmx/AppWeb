<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


define("WEB_DIR",sprintf("%s".DIRECTORY_SEPARATOR."web",BASE_DIR));
define("LIB_DIR",sprintf("%s".DIRECTORY_SEPARATOR."lib",BASE_DIR));
define("LOCAL_LIB_DIR",sprintf("%s".DIRECTORY_SEPARATOR."lib",DATA_DIR));
define("TEMPLATE_DIR",sprintf("%s".DIRECTORY_SEPARATOR."template",BASE_DIR));
define("LOCAL_TEMPLATE_DIR",sprintf("%s".DIRECTORY_SEPARATOR."template",DATA_DIR));

if(file_exists(DATA_DIR.DIRECTORY_SEPARATOR.'config.local.php')){
    require_once DATA_DIR.DIRECTORY_SEPARATOR.'config.local.php';
}

$dsn = sprintf('pgsql:dbname=%s;host=%s;port=%s',"gw_dev","127.0.0.1","5432");

if (!defined("DSN")) define("DSN",$dsn);
if (!defined("DB_USER")) define("DB_USER","postgres");
if (!defined("DB_PWD")) define("DB_PWD","postgres");
?>
