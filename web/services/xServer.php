<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$result=Array(
    "success" => 0,
    "message" => Array(),
    "js" => Array("./js/controller.avvio_procedimento.js","./js/controller.soggetti.js"),
    "data" => Array(),
    "html" => sprintf("Ciao Questa pagina è %s",$_REQUEST["form"])
);

header("Content-Type: application/json;charset=utf-8");
print json_encode($result);
?>