<?php
	
	if (isset($_POST['nombre']) && isset($_POST['clave'])) {
    if (($_POST['nombre']=="usuario")&&($_POST['clave']=="123456") )
        {
        session_start();
        $_SESSION['usuario']="usuario";
        
        header( "Location:".$_POST['diract'] );
        }
    else if (($_POST['nombre']=="admin")&&($_POST['clave']=="123456") ) {
		session_start();
        $_SESSION['usuario']="admin";
		/*header("location:index.php");*/
		header( "Location:".$_POST['diract'] );
	}else
        header( "Location:".$_POST['diract'] );
}

?>