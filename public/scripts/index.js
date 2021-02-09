$(document).ready(function(){
    $("#burger_action").on("click", function(){
        $("#burger_menu").toggle();
        console.log($("#burger_menu"));
    });
});