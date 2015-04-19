$(document).ready(function(){
    
    console.log("JQuery is working");
    
    $(".login-box").hide();
    
     $("button").click(function(){
        //console.log("login box clicked");
         $(".login-box").slideToggle();
    });

});