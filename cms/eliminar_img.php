<?php

include_once '../includes/conection.php';


    $nombre = $_POST['nombre'];
    $sql= "DELETE FROM banner_index WHERE Nombre_img='$nombre'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "eliminado";
    }else{
        echo "No se pudo eliminar";
    }
    header("Location:inicio-admin");
