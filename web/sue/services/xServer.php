<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../../login.php';

if (!file_exists(LIB_DIR.DIRECTORY_SEPARATOR.'sue'.DIRECTORY_SEPARATOR.'server.class.php'))
    die(LIB_DIR.DIRECTORY_SEPARATOR.'sue'.DIRECTORY_SEPARATOR.'server.class.php');

require_once LIB_DIR.DIRECTORY_SEPARATOR.'sue'.DIRECTORY_SEPARATOR.'server.class.php';

sueServer::runServer($_REQUEST);
?>