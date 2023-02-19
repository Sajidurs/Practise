// function myfun(){

//   // Creating an object
//   var req = new XMLHttpRequest();

//   // Sending request to the server
//   req.open('GET','load.html',true);
//   req.send();

//   // 
//   req.onreadystatechange = function (){
//     if(req.readyState == 4 && req.status == 200){
//       document.getElementById('pera').innerHTML = req.responseText;
//     }
//   }


// }


$(document).ready(function(){
  $('.button1').click(function(){
    $.get('load.html', function(data, status){
      $('#pera').html(data);
      alert(status);
    });
  });
});