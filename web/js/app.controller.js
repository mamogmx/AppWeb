/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    console.log(AppWeb);

    $('a[data-plugins="loadContent"]').bind('click',function(e){
        
    	var self = this;
        e.preventDefault();
        $(".sidebar-menu .active").removeClass("active");
        $.each($(self).parentsUntil(".sidebar-menu"),function(k,v){
            if($(v).is("li")) $(v).addClass("active");
        });
        $(self).parent().addClass("active");
        var d = $(self).data();
        AppWeb.loadContent(d);
        
    });
});