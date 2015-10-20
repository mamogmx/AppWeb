<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of appWeb
 *
 * @author Marco Carbone
 * @email marco.carbone@gmx.com
 */
class appWeb {
    /*Function that return USERNAME of current logged user*/
    static function getUser(){
        return $_SESSION["APPWEB"]["USERNAME"];
    }
    
    /*Function that return information about current logged user*/
    static function getUserInfo(){
        $result = Array();
        return $result;
    }
    
    /*Function that return groups of current logged user*/
    static function getUserGroups(){
        
    }
    
    /*Function that returns roles for current user for the specific application*/
    static function getUserRoles($application="all"){
        $result = Array();
        return $result;
    }
    
    /*Function that returns all notifications for current user */
    static function getNotifications($application="all", $userName=""){
        $usr = (!$userName)? (self::getUser()) : ($userName);
        $result = Array();
        return $result;
    }
    
    /*Function that returns all notifications for current user */
    static function getTasks($application="all", $userName=""){
        $usr = (!$userName)? (self::getUser()) : ($userName);
        $result = Array();
        return $result;
    }
    
    /*Function that returns all notifications for current user */
    static function getMessages($application="all", $userName=""){
        $usr = (!$userName)? (self::getUser()) : ($userName);
        $result = Array();
        return $result;
    }
}
