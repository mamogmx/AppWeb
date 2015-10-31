<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of appWebForm
 *
 * @author Marco Carbone
 * @email marco.carbone@gmx.com
 */
class appWebForm {
    
    static function prepareConf($conf){
        
    }
    static function writeControl($conf,$data){
        $html = self::loadTemplate($conf["template"], $app);
        $html = utils::dsprintf($html,$conf);
        
    }
    static function writeCell($conf,$data){
        
    }
    static function writeRow($conf,$data){
        
    }
    static function writeFieldSet($conf,$data){
        
    }
    static function writeForm($conf,$data){
        
    }
    static function loadTemplate($templateName,$app){
        if (file_exists(LOCAL_TEMPLATE_DIR.DIRECTORY_SEPARATOR.$app.DIRECTORY_SEPARATOR.$templateName.".html")){
            $html = file_get_contents(LOCAL_TEMPLATE_DIR.DIRECTORY_SEPARATOR.$app.DIRECTORY_SEPARATOR.$templateName.".html");
        }
        elseif (file_exists(LOCAL_TEMPLATE_DIR.DIRECTORY_SEPARATOR.$templateName.".html")) {
            $html = file_get_contents(LOCAL_TEMPLATE_DIR.DIRECTORY_SEPARATOR.$templateName.".html");
        }
        elseif (file_exists(TEMPLATE_DIR.DIRECTORY_SEPARATOR.$app.DIRECTORY_SEPARATOR.$templateName.".html")) {
            $html = file_get_contents(TEMPLATE_DIR.DIRECTORY_SEPARATOR.$app.DIRECTORY_SEPARATOR.$templateName.".html");
        }
        elseif(TEMPLATE_DIR.DIRECTORY_SEPARATOR.$templateName.".html"){
            $html = file_get_contents(TEMPLATE_DIR.DIRECTORY_SEPARATOR.$templateName.".html");
        }
        else{
            $html = "No Template \"$templateName\" provided ";
        }
    }
}
