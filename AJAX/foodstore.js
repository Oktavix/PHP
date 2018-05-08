var xmlHTTP = createXMLHTTPRequestObject();

function createXMLHTTPRequestObject(){
  var xmlHTTP;

  if(window.ActiveXObject){
    try{
      xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");

    } catch(ex){
      xmlHTTP = false;
    } //catch

  } else{
    try{
      xmlHTTP = new XMLHttpRequest();

    } catch(ex){
      xmlHTTP = false;
    } //catch
  }

  if(!xmlHTTP){
    alert("Can't create that object");

  } else{
    return xmlHTTP;
  }

  function process(){
    if(xmlHTTP.readyState == 0 || xmlHTTP.readyState == 4){
      food = encodeURIComponent(document.getElementById("user_input").value);
      xmlHTTP.open("GET", "foodstore.php?food="+food, true);
      xmlHTTP.onreadystatechange = handleServerResponse;
    } else{

    }
  }
}
