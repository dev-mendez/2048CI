$(document).ready(function () {

 var myAudio= document.createElement('audio');
 var myMessageAlert = "";
 myAudio.src = 'assets/js/bg1.aac';

 myAudio.addEventListener('ended', function(){
    Myalert()
 });

function Myalert() { 
    myAudio.play();
} 
Myalert()

});