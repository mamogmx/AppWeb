<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author Marco Carbone
 * @email marco.carbone@gmx.com
 */
class appWebPage {
    static function renderNotifications($mode="",$userName=""){
        
    }
    
    static function renderTasks($mode="",$userName=""){
        
    }
    
    static function renderMessages($mode="",$userName=""){
        
        $template=<<<EOT
    <li>
        <a href="#">
            <h4>
                %(title)s
                <small><i class="fa fa-clock-o"></i> %(time)s</small>
            </h4>
            <p>%(message)s</p>
        </a>
    </li>
EOT;
    }
}

?>