var title = document.getElementById("h1_scream");
var scream = new Audio('http://localhost/wordpress/wp-content/uploads/2020/06/Humi1013.mp3');
title.addEventListener("mouseover", playScream, false);

function playScream() {
   scream.play();
}

var btn_choix = document.getElementById("titre_theme");
var electric = new Audio('http://localhost/wordpress/wp-content/uploads/2020/06/electriccurrent.mp3');
btn_choix.addEventListener("mouseover", playElectric, false);

function playElectric(){
   electric.play();
}


/*var buttonQuestion = document.getElementById("button_Pose_Question");
console.log("ok");
console.log(buttonQuestion);

buttonQuestion.addEventListener("click",showDiv);

function showDiv(){
   console.log('ici');
   document.getElementById("add_text").innerHTML = "Hello Dolly.";
}*/

(function a() {
   $(document).ready(function() {
 
     // Tout le code ira ici
     let del = document.getElementById('del');
     del.addEventListener("click", function(e){
     e.preventDefault();
     console.log('aaaaaaaaaaaaaaaaa');
     alert('rrr')
     });

 
   });
 })();


 