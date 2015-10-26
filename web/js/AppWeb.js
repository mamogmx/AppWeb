/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
;var AppWeb = {};
;(function($) {
    AppWeb.controlsType = [];
    AppWeb.serverURL = "/services/xServer.php";
    AppWeb.suggestURL = "/services/xSuggest.php";
    
    AppWeb.initialize = function(){
        $.ajax({
            url:AppWeb.serverURL,
            method: 'POST',
            data: {action:'initialize'},
            success:function(data, textStatus, jqXHR){
                
            },
            error:function(jqXHR, textStatus, errorThrown){
                
            }
        });
    };
    AppWeb.initializeControls = function(){
        $(".datepicker").datepicker();
    };
    AppWeb.loadContent = function(obj){
        if(typeof(obj["form"])!=="undefined"){
            $.ajax({
                url : AppWeb.serverURL,
                data : obj,
                method : 'POST',
                success : function(data, textStatus, jqXHR){
                    $("#main-content").html(data["html"]);
                    if (data["js"].length){
                        for(i=0;i<data['js'].length;i++){
                            var js = data["js"][i];
                            $.getScript(js).fail(
                                function( jqxhr, settings, exception ) {
                                    console.log( "Triggered ajaxError handler on " + js );
                                }
                            );
                        }
                    }
                    AppWeb.initializeControls();
                },
                error:function(jqXHR, textStatus, errorThrown){

                }
            });
        }
    };
    AppWeb.loadMenu = function(obj){
        console.log("Loading Menu .... ");
            
    };
})(jQuery);