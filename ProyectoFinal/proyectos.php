<?php
	//Los requires indican las carpetas donde estan las funciones que vamos a necesitar.
	require('funcionesPHP/cabecera.php');
	require('funcionesPHP/prueba.php');
	require('funcionesPHP/maquetacionHTML.php');
	require('sesiones.php');
	
	HTMLinicio("Proyectos");
	cabecera();
	session_start();//Control de sesiones para usuario logueados en el sistema
	if(isset($_SESSION['usuario'])){
		if($_SESSION['tipo']==0 ){//Si es administrador o miembro muestra lo siguiente
			logueadoAdmin();
			nav(3);//Funcion con un parametro que selcciona un item.
			edicionProyectos(7);//Funcion con un parametro que selcciona un item.
			cierreNav();
			contenido();
			proyectos();
			
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
		}else if ($_SESSION['tipo']==1){
			logueadoAdmin();
			nav(3);//Funcion con un parametro que selcciona un item.
			edicionProyectos(7);//Funcion con un parametro que selcciona un item.
			cierreNav();
			contenido();
			proyectos();
			
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
		}else {
				session_unset();
				logueoFallido();
				nav(3);
				cierreNav();
				contenido();
				proyectos();;
				cierreContenido();
				cierraEstructura();
				pie();
				HTMLfin();
			}
		
	}else{
		
		logueo();
		nav(3);
		cierreNav();
		contenido();
		proyectos();
		cierreContenido();
		cierraEstructura();
		pie();
		HTMLfin();
		
	}
?>