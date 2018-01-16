//Función para validar un correo. Estas funciones las he sacado de internet, porque ya estaban predeterminadas.
function validarEmail() {
	var valor 
	valor = document.getElementById("email").value ;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(valor) ){
		alert("Error: La dirección de correo " + valor + " es incorrecta.");
		var j = document.getElementById("email");
					 j.value = "";
  	}
        
}
//Avisos de edicion, borrado o inserción.
function aviso(){
	if (!confirm("¿Desea eliminar el proyecto?")) {
		
		return false;
	}
	else {
		document.miform.submit() 
		return true;
	}
}
function aviso1(){
	if (!confirm("¿Desea editar el proyecto?")) {
		
		return false;
	}
	else {
		document.miform.submit() 
		return true;
	}
}
function aviso2(){
	if (!confirm("¿Desea crear el proyecto?")) {
		
		return false;
	}
	else {
		document.miform.submit() 
		return true;
	}
}
function aviso3(){
	if (!confirm("¿Desea editar este miembro?")) {
		
		return false;
	}
	else {
		document.miform.submit() 
		return true;
	}
}
function aviso4(){
	if (!confirm("¿Desea borrar este miembro?")) {
		
		return false;
	}
	else {
		document.miform.submit() 
		return true;
	}
}

//Validar fecha. También cogida de internet.
function validar() {
  var fecha
  fecha = document.getElementById("fechainicio").value ;
  patron = /^\d{4}\-\d{2}\-\d{2}$/
  if(!patron.test(fecha)){
	  alert("Formato de fecha erroneo. Recuerde aaaa-mm-dd");
	  var fecha1=document.getElementById("fechainicio");
	  fecha1.value="";
  }
}
function validar1() {
  var fecha
  fecha = document.getElementById("fechafin").value ;
  patron = /^\d{4}\-\d{2}\-\d{2}$/
  if(!patron.test(fecha)){
	  alert("Formato de fecha erroneo. Recuerde aaaa-mm-dd");
	  var fecha1=document.getElementById("fechafin");
	  fecha1.value="";
  }

}
//Sacada de la pagina http://librosweb.es/libro/ajax/capitulo_7/la_primera_aplicacion.html, Se usa ajax para la muestra de un archivo txt con la versión del proeycto web
function descargaArchivo() {
  // Obtener la instancia del objeto XMLHttpRequest
  if(window.XMLHttpRequest) {
    peticion_http = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {
    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
  }
 
  // Preparar la funcion de respuesta
  peticion_http.onreadystatechange = muestraContenido;
 
  // Realizar peticion HTTP
  peticion_http.open('GET', 'hola.txt', true);
  peticion_http.send(null);
 
  function muestraContenido() {
    if(peticion_http.readyState == 4) {
      if(peticion_http.status == 200) {
        if(confirm(alert(peticion_http.responseText))){
			setTimeout(window.location="index.php",3000);
		}else{
			setTimeout(window.location="index.php",3000);
		}
			
    }
  }
  
  window.onload = descargaArchivo;
 //setTimeout(window.location="index.php",3000);
}

}