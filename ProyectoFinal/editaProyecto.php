<?php
	require('funcionesPHP/cabecera.php');
	require('funcionesPHP/maquetacionHTML.php');
	session_start();
	HTMLinicio("Añadir Usuario");
	cabecera();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['tipo']==0 ){
			logueadoAdmin();
			nav(7);
			edicionProyectos(1);
			cierreNav();
			contenido();
			
			if (isset($_POST['Editar'])){
				if($_POST['Editar']=='Editar'){
					//echo 'hooladxc';
					$sol= editaproyecto();
					if($sol==true){
						echo '<script type="text/javascript">

							window.location="editarproyectos.php";
							</script>';

					}
					
				}
			}else if( isset($_POST['Borrar'])){
				if($_POST['Borrar']=='Borrar') {
				$sol=borraproyecto();
				if($sol==true){
						echo '<script type="text/javascript">

							window.location="editarproyectos.php";
							</script>';

					}
				}
			}
			cierreContenido();
			cierraEstructura();
			pie();
			HTMLfin();
		}else if ($_SESSION['tipo']==1){
			logueadoAdmin();
			nav(7);
			edicionProyectos(1);
			cierreNav();
			contenido();
			
			if (isset($_POST['Editar'])){
				if($_POST['Editar']=='Editar'){
					//echo 'hooladxc';
					$sol= editaproyecto();
					if($sol==true){
						echo '<script type="text/javascript">

							window.location="editarproyectos.php";
							</script>';

					}
					
				}
			}else if( isset($_POST['Borrar'])){
				if($_POST['Borrar']=='Borrar') {
				$sol=borraproyecto();
				if($sol==true){
						echo '<script type="text/javascript">

							window.location="editarproyectos.php";
							</script>';

					}
				}
			}
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
