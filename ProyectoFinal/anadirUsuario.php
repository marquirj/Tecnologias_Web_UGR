<?php
	require('funcionesPHP/cabecera.php');
	require('funcionesPHP/maquetacionHTML.php');
	session_start();
	HTMLinicio("Añadir Usuario");
	cabecera();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['tipo']==0 ){
			logueadoAdmin();
			nav(4);
			edicionProyectos();
			cierreNav();
			contenido();
			miembros();
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
		}else if ($_SESSION['tipo']==1){
			logueadoAdmin();
			nav(4);
			cierreNav();
			contenido();
			miembrosAñadir();
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
		}else {
				session_unset();
				
				logueoFallido();
				nav(4);
				cierreNav();
				contenido();
				miembros();
				cierreContenido();
				cierraEstructura();
				pie();
				HTMLfin();
			}
	}else{
		
		logueo();
		nav(4);
		cierreNav();
		contenido();
		miembros();
		cierreContenido();
		cierraEstructura();
		pie();
		HTMLfin();
	}
	
?>