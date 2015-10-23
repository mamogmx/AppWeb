/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
;var AppWeb = {};
;(function($) {
    
    AppWeb.serverURL = "/services/xServer.php";
    AppWeb.initializeControls = function(){
        $(".datepicker").datepicker();
        console.log($("input.datepicker"));
    };
    AppWeb.loadContent = function(obj){
        if(typeof(obj["form"])!=="undefined"){
            $.ajax({
                url : AppWeb.serverURL,
                data : obj,
                method : 'POST',
                success : function(data){
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
                }
            });
        }
    };
    
})(jQuery);