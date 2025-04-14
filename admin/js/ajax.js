function createXMLHttpRequest() {
   try{ return new ActiveXObject("Msxml2.XMLHTTP"); }catch(e){}
   try{ return new ActiveXObject("Microsoft.XMLHTTP"); }catch(e){}
   try{ return new XMLHttpRequest(); }catch(e){}
   alert("XMLHttpRequest not supported");
   return null;
}


var xhReq = createXMLHttpRequest();
var xhReq2 = createXMLHttpRequest();
var xhReq3 = createXMLHttpRequest();

function geraJS(texto){
        
          var ini = 0;
          while (ini!=-1){
              ini = texto.indexOf('<script', ini);
              if (ini >=0){
                  ini = texto.indexOf('>', ini) + 1;
                  var fim = texto.indexOf('</script>', ini);
                  codigo = texto.substring(ini,fim);
                  eval(codigo);
              }
          }
 }

          function ajax(url,div){
               var div = document.getElementById(div);
               div.innerHTML = "<img src='espera.gif'>&nbsp;&nbsp;<font color=black size=2px>Carregando...</font>"; 

               xhReq.open("GET",url,true);
               
               xhReq.onreadystatechange=function() {
                    if(xhReq.readyState == 4) {
                         div.innerHTML = xhReq.responseText ;
                         geraJS(xhReq.responseText);
                    }
               }
               xhReq.send(null);
          }
		  
		  function ajax2(url2,div2){
               var div2 = document.getElementById(div2);
               div2.innerHTML = "<img src='ajax/espera.gif'>&nbsp;&nbsp;<font color=black size=2px>Carregando...</font>"; 

               xhReq2.open("GET",url2,true);
               
               xhReq2.onreadystatechange=function() {
                    if(xhReq2.readyState == 4) {
                         div2.innerHTML = xhReq2.responseText ;
                         geraJS(xhReq2.responseText);
                    }
               }
               xhReq2.send(null);
          }
		  
		  
		  	  function ajax3(url3,div3){
               var div3 = document.getElementById(div3);
               div3.innerHTML = "<img src='ajax/espera.gif'>&nbsp;&nbsp;<font color=black size=3px>Carregando...</font>"; 

               xhReq3.open("GET",url3,true);
               
               xhReq3.onreadystatechange=function() {
                    if(xhReq3.readyState == 4) {
                         div3.innerHTML = xhReq3.responseText ;
                         geraJS(xhReq3.responseText);
                    }
               }
               xhReq3.send(null);
          }
