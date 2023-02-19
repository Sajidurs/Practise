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


    $.post('post.php',{
      name : "Sajidur Rahman",
      job  : "Web Developer" 
    }, function(data, status){
      $('#pera').html(data);

      // Alert
      alert(status);

    });

  });
});