<?php

//Conexion a mysql
$conexion= mysql_connect("mysql3.000webhost.com","a4668813_admin","admin123");

//Nombro variables con metodo POST
$Autor= $_POST['Autor'];
$Fecha = $_POST['Fecha'];
$Text = $_POST['Text'];

//Selecciono mi Base de Datos
mysql_select_db("a4668813_rye",$conexion);


//Añado la onulta
$sql="INSERT INTO noticias (`Autor`, `Fecha`, `Text`) VALUES ('$Autor','$Fecha','$Text')";

$resultado=mysql_query($sql);

//Cierro
mysql_close($conexion);

?>