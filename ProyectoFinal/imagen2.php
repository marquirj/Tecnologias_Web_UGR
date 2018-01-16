<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
			include_once "conexion.php";
			// Ruta donde se guardarán las imágenes
			$directorio = '/home/alumnos/1617/juanmartinquiros1617/public_html/TWPF/img/';
			// Recibo los datos de la imagen
			$nombre = $_FILES['imagen']['name'];
			$tipo = $_FILES['imagen']['type'];
			$tamano = $_FILES['imagen']['size'];
			
			// Muevo la imagen desde su ubicación
			// temporal al directorio definitivo
			move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
			$nombre = "img/" . $nombre ;	
			$query="Select max(id) from miembros";
			$rec = mysqli_query($con,$query);
			$col=mysqli_fetch_row($rec);
			
			echo $nombre;
				$query1="Update miembros
						SET foto='{$nombre}'
						where id='{$col[0]}';";
				if ($con->query($query1) === TRUE) {
					echo '<script type="text/javascript">
					alert("Se ha insertado el nuevo miembro.");
					setTimeout(window.location="nuevomiembro.php",3000);
					</script>';
				
			} else {
				echo '<script type="text/javascript">
				alert("Se ha producido un error en la inserción.");
				setTimeout(window.location="nuevomiembro.php",3000);
				</script>';
			}		
				
	
	}
	
	
	
?>