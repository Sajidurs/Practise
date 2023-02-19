function myfun(){

  // Creating an object
  var req = new XMLHttpRequest();

  // Sending request to the server
  req.open('GET','load.html',true);
  req.send();

  // 
  req.onreadystatechange = function (){
    if(req.readyState == 4 && req.status == 200){
      document.getElementById('pera').innerHTML = req.responseText;
    }
  }


}
