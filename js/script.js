$(document).ready(function(){

    $("#mybtn").click(function(){
    $.post("login.php", function(data, status){
       $("#firstName").val(data);
       alert($("#firstName").val());
    });
    });
});