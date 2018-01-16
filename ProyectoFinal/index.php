<?php
	require('funcionesPHP/cabecera.php');
	require('funcionesPHP/maquetacionHTML.php');
	HTMLinicio("Inicio");
	cabecera();
	session_start();
	if(isset($_SESSION['usuario'])){
		echo $_SESSION['usuario'];
			echo $_SESSION['tipo'];
			if($_SESSION['tipo']==0) {
				logueadoAdmin();
				nav(0);
				accionesExtra(7);
				cierreNav();
				contenido();
				historia();
				cierreContenido();
				cierraEstructura();
				pie();
				HTMLfin();
			}else if ($_SESSION['tipo']==1) {
				
				logueadoAdmin();
				nav(0);
				cierreNav();
				contenido();
				historia();
				cierreContenido();
				cierraEstructura();
				pie();
				HTMLfin();
			}else {
				session_unset();
				
				logueoFallido();
				nav(0);
				cierreNav();
				contenido();
				historia();
				cierreContenido();
				cierraEstructura();
				pie();
				HTMLfin();
			}
	}else{
		
			logueo();
			nav(0);
			cierreNav();
			contenido();
			historia();
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
	}
?>