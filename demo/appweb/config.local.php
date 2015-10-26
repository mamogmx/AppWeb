<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dsn = sprintf('pgsql:dbname=%s;host=%s;port=%s',"gw_dev","127.0.0.1","5435");
define("DSN",$dsn);
?>