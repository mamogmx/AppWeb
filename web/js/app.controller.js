/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    $('a[data-plugins="loadContent"]').bind('click',function(e){
        var self = this;
        e.preventDefault();
        var d = $(self).data();
        var params = d["parameters"];
    });
});