<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['imagen'])){
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
	}
	
	if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['categoria']) && isset($_POST['departamento']) 
			&& isset($_POST['email']) && isset($_POST['url']) && isset($_POST['centro']) && isset($_POST['universidad']) ){
				// Datos de conexión a configurar
					include_once "conexion.php";
					session_start();
					// Ruta donde se guardarán las imágenes
					//$directorio = '/home/alumnos/1617/juanmartinquiros1617/public_html/TWPF/img/';
				 
					//variables recibidas
					
					$nome = $_POST['nombre'];
					$apellido =  $_POST['apellido'];
					$dir= $_POST['direccion'];
					$tel = $_POST['telefono'];
					$cat = $_POST['categoria'];
					$depto = $_POST['departamento'];
					$email  =  $_POST['email'];
					$url = $_POST['url'];
					$centro = $_POST['centro']; 
					$uni =  $_POST['universidad'];
					$direct = $_POST['dir']; 
					$pass = $_POST['contra'];
					echo $nome;
					echo $apellido;
					echo $dir;
					echo $tel;
					echo $cat;
					echo $depto;
					echo $email;
					echo $url;echo $centro;
					echo $uni;echo $direct;echo $pass;
					
					
					
					 
					 //Guardamos en la BBDD  
					$query2="INSERT INTO miembros(nombre, apellidos, direccion, telefono, categoria,
						Director, departamento, email, url, centro, universidad, pass,foto ,perteneciente) VALUES ('{$_POST['nombre']}','{$_POST['apellido']}','{$_POST['direccion']}',
						'{$_POST['telefono']}','{$_POST['categoria']}','{$_POST['dir']}','{$_POST['departamento']}','{$_POST['email']}',
						'{$_POST['url']}','{$_POST['centro']}','{$_POST['universidad']}','{$_POST['contra']}','img/','si');";
						$fecha=date("Y-m-d");
						$query3="INSERT INTO log(accion,fecha) VALUES ('Insercion Miembro','{$fecha}')";
						$rec = mysqli_query($con,$query3);
						$col=mysqli_fetch_row($rec);
					
					if ($con->query($query2) === TRUE) {
						
						header('location:imagen.php');
					}else{
						echo 'adios';
					}
	}else {
		header('location:as.php');
	}
    }else {
		echo 'uff';
		
	}
	
?>