<?php
$us="root";
$pass="";
$serv="localhost";
$db="funkos";
$con=mysql_connect($serv,$us,$pass) or die("Error al conectar".mysql_error());
mysql_select_db($db,$con);
return $con;
  ?>