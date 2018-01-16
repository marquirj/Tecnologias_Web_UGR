
<?php
// datos para la conexión a mysql
define('DB_SERVER','localhost');
define('DB_NAME','juanmartinquiros1617');
define('DB_USER','juanmartinquiros1617');
define('DB_PASS','0ImsdY');

$con = New mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con,"utf8");
return $con;
?>

