<?php
include_once('conexion.php');

$tablas = array();
$result = mysqli_query($con,'SHOW TABLES');
while ($row = mysqli_fetch_row($result))
$tablas[] = $row[0];
// Salvar cada tabla
$salida = '';
foreach ($tablas as $tab) {
$result = mysqli_query($con,'SELECT * FROM '.$tab);
$num = mysqli_num_fields($result);
$salida .= 'DROP TABLE '.$tab.';';
$row2 = mysqli_fetch_row(mysqli_query($con,'SHOW CREATE TABLE '.$tab));
$salida .= "\n\n".$row2[1].";\n\n"; // row2[0]=nombre de tabla
while ($row = mysqli_fetch_row($result)) {
$salida .= 'INSERT INTO '.$tab.' VALUES(';
for ($j=0; $j<$num; $j++) {
$row[$j] = addslashes($row[$j]);
$row[$j] = preg_replace("/\n/","\\n",$row[$j]);
if (isset($row[$j]))
$salida .= '"'.$row[$j].'"';
else
$salida .= '""';
if ($j < ($num-1)) $salida .= ',';
}
$salida .= ");\n";
}
$salida .= "\n\n\n";
}
 $f = fopen("js/mybackup.sql","w");
  if ($f){
    fwrite($f,$salida);
    fclose($f);
    //echo 'Backup realizado';
	echo '<script type="text/javascript">
							alert("Backup realizado.")
							setTimeout(window.location="index.php",3000);
							
							</script>';
  }
  else {
	  echo '<script type="text/javascript">
							alert("Backup no realizado.")
							setTimeout(window.location="index.php",3000);
							
							</script>';
    echo 'No se ha realizado el backup';
  }

/*
mysqli_query($con,'SET FOREIGN_KEY_CHECKS=0');
$error = '';
$f="mybackup.sql";
$sql = file_get_contents($f);
$queries = explode(';',$sql);
foreach ($queries as $q) {
if (!mysqli_query($con,$q))
$error .= mysqli_error($con);
}
mysqli_query($con,'SET FOREIGN_KEY_CHECKS=1');
*/
?>
