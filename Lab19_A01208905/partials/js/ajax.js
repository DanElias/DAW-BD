

    function getRequestObject() {
      // Asynchronous object created, handles browser DOM differences
    
      if(window.XMLHttpRequest) {
        // Mozilla, Opera, Safari, Chrome, IE 7+
        return (new XMLHttpRequest());
      }
      else if (window.ActiveXObject) {
        // IE 6-
        return (new ActiveXObject("Microsoft.XMLHTTP"));
      } else {
        // Non AJAX browsers
        return(null);
      }
    }
    
    //Funcion modificada de request que recibe 1. el id del text input element, 
    //2. El archivo php que es el controlador que genera el html de la respuesta
    //3. el id del lugar donde se va a mostrar la respuesta del ajax request
    
    function sendRequest(idinput, filephp, idoutput){
    
       request=getRequestObject();
       if(request!=null)
       {
         var userInput = document.getElementById(idinput);
         var url=filephp+'?pattern='+userInput.value;   //Aqui se manda llamar el php
         request.open('GET',url,true);
         request.onreadystatechange = 
                function() { 
                    if((request.readyState==4)){
                        // Asynchronous response has arrived
                        var ajaxResponse=document.getElementById(idoutput);
                        ajaxResponse.innerHTML=request.responseText;
                        ajaxResponse.style.visibility="visible";
                    }     
                };
         request.send(null);
       }
    }
    
    function selectValue() {
       var list=document.getElementById("list");
       var userInput=document.getElementById("userInput");
       var ajaxResponse=document.getElementById('ajaxResponse');
       userInput.value=list.options[list.selectedIndex].text;
       ajaxResponse.style.visibility="hidden";
       userInput.focus();
    }
