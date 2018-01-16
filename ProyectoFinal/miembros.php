<?php
	require('funcionesPHP/cabecera.php');
	require('funcionesPHP/maquetacionHTML.php');
	session_start();
	HTMLinicio("Miembros");
	cabecera();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['tipo']==0 ){
			logueadoAdmin();
			nav(1);
			edicionMiembros(7);
			cierreNav();
			contenido();
			miembros();
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
		}else if ($_SESSION['tipo']==1){
			logueadoAdmin();
			nav(1);
			edicionMiembros(7);
			cierreNav();
			contenido();
			miembros();
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
		}else {
				session_unset();
				
				logueoFallido();
				nav(1);
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
		nav(1);
		cierreNav();
		contenido();
		miembros();
		cierreContenido();
		cierraEstructura();
		pie();
		HTMLfin();
	}
	
?>