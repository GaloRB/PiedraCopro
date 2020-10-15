<?php

include_once '../includes/conection.php';

    if(isset($_POST['eliminar'])){
        $nombre = $_POST['nombre'];
        $sql= "SELECT ruta_img FROM banner_index WHERE Nombre_img='$nombre'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $query= "DELETE FROM banner_index WHERE Nombre_img='$nombre'";
            $res = mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result)){
                unlink('../'.$row['ruta_img'].'');  
            }
        }
    }
   
    
    header("Location:inicio-admin");
