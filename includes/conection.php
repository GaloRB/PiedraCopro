<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "piedracopro";

$conn=mysqli_connect($server,$user,$pass,$db);
/* -----  PROBAR CONEXION -------
if($conn->connect_error){
    echo ("La conexion fallo");
}else{
    echo ("Coenctado");
}*/
?>