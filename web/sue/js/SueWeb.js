/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
;var AppWeb = AppWeb || {};
;var SueWeb = {};
;(function($) {
    
    SueWeb.serverURL = "/sue/services/xServer.php";
    SueWeb.suggestURL = "/sue/services/xSuggest.php";
    
    
})(jQuery);

$.extend(true, AppWeb, {
    sue: SueWeb
});