$(document).ready(function(){
    $("#answer1").hide(); 
     $("#answer2").hide(); 
     $("#answer3").hide(); 
     $("#answer4").hide(); 
     $("#answer5").hide(); 
});

function showUp(elem){
    $("#"+elem).slideToggle();
}