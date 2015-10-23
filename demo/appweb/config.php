<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("WEB_DIR",sprintf("%s".DIRECTORY_SEPARATOR."web",BASE_DIR));
define("LIB_DIR",sprintf("%s".DIRECTORY_SEPARATOR."lib",BASE_DIR));
define("TEMPLATE_DIR",sprintf("%s".DIRECTORY_SEPARATOR."template",BASE_DIR));

$dsn = sprintf('pgsql:dbname=%s;host=%s;port=%s',"gw_dev","127.0.0.1","5435");
define("DSN",$dsn);
define("DB_USER","postgres");
define("DB_PWD","postgres");
?>
