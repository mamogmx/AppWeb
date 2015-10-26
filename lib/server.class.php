<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of server
 *
 * @author mamo
 */
class appServer {
    static $result = Array(
        "success" => 0,
        "messages" => Array(),
        "js" => Array(),
        "data" => Array(),
        "html" => Array()
    );
    static function runServer($params){
        $action = ($params["action"])?($params["action"]):($params["plugin"]);
        switch($action){
            case "initialize":
                break;
            case "loadContent":
                $html = <<<EOT
    <p>Ciao Questa pagina è %s.</p>
    <input id="data" class="datepicker" data-date-format="mm/dd/yyyy">
EOT;
                $html = sprintf($html,$params["form"]);
                self::$result["success"] = 1;
                self::$result["js"] = Array("./js/controller.avvio_procedimento.js","./js/controller.soggetti.js");
                self::$result["html"] = $html;
                break;
            case "loadMenu":
                break;
            default:
                break;
        }
        self::returnResult(self::$result);
    }
    static function returnResult($data){
        header("Content-Type: application/json;charset=utf-8");
        print json_encode($data);
    }
}
