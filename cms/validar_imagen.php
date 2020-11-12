<?php

    include_once '../includes/conection.php';

    
    $extensiones = array('.jpg','.JPG','.jpeg','.png','.gif','.svg');
    if(isset($_POST['guardar'])){
        $nombre = $_POST['nombre'];
        $alt = $_POST['alt'];
        $nombreImagen= $_FILES['imagen']['name'];
        $nombreTempImagen = $_FILES['imagen']['tmp_name'];
        $ruta="img/".$nombreImagen;
        $ext = substr($nombreImagen,strpos($nombreImagen,'.'));
        if(in_array($ext,$extensiones)){
            $sql="INSERT INTO banner_index (Nombre_img,ruta_img,alt) VALUES ('$nombre','$ruta','$alt')";
            $result=mysqli_query($conn,$sql);
            if($result){
                move_uploaded_file($nombreTempImagen,"../img/$nombreImagen");
                header("Location:inicio-admin");
            }else{
                echo "Error";
            }
            
        }else{
            echo "Archivo no valido";
        }
    }

    function validarImageCard(){
        include  '../includes/conection.php';
        $nom = $_POST['nombre'];
        $extensiones = array('.jpg','.JPG','.jpeg','.png','.gif','.svg');
        if(isset($_POST['actualizar'])){
        $nombreImagen= $_FILES['imagen-card']['name'];
        $nombreTempImagen = $_FILES['imagen-card']['tmp_name'];
        $ruta="img/".$nombreImagen;
        $ext = substr($nombreImagen,strpos($nombreImagen,'.'));
        if(in_array($ext,$extensiones)){
            $sql="UPDATE card_const SET ruta_img = $ruta WHERE nombre='$nom'";
            $result=mysqli_query($conn,$sql);
            if($result){
                move_uploaded_file($nombreTempImagen,"../img/$nombreImagen");
                header("Location:inicio-admin");
            }else{
                echo "Error";
            }
            
        }
        }
    }
    
    if(isset($_POST['actualizar'])){
    
        validarImageCard();
       
    }

    



?>