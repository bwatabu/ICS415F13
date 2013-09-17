<script>
function getClasses(elem){
 var classes = document.getElementById(elem).className;
     var arrayClasses = new Array();
     arrayClasses = classes.split(" ");
     document.write(arrayClasses);
}

function addClass(elem, className){
var True = 0;
var dummy = document.getElementById(elem);


var classes = document.getElementById(elem).className;
var arrayClasses = new Array();
arrayClasses = classes.split(" ");

for(var i = 0; i < arrayClasses.length; i++){
    if(arrayClasses[i] == className){
        True = 1;
    }        
         
}
if(True == 1){
   document.write("Already Get " + className);
}
else{
    
   dummy.className = dummy.className + " " + className;
   document.write(dummy2.className);
}

}
</script>