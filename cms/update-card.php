<?php

function title(){
    
    require_once '../includes/conection.php';
    // validando las entradas a la BD
    $nom = $_POST['nombre'];
    $titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
    echo json_encode($_POST);

    try {
        $stmt = $conn->prepare("UPDATE card_const SET titulo =(?) WHERE nombre='$nom'");
        $stmt->bind_param("s", $titulo);
        $stmt->execute();
        
        /*if($stmt->affected_rows == 1){
            $respuestaPhp = array(
                'respuestaPhp' => 'correcto',
                'datos' => array(
                    'titulo' => $titulo,
                    'id_insertado' => $stmt->insert_id,
                )
            );
        }*/
        
        $stmt->close();
        $conn->close();
        
    } catch (Exception $e) {
        $respuestaPhp = array(
            'error' => $e->getMessage()
        );
    }
    
    header("Location:inicio-admin");
}


function text(){
    if(isset($_POST['text-card'])){
        require_once '../includes/conection.php';
        // validando las entradas a la BD
        $nom = $_POST['nombre'];
        $texto = filter_var($_POST['text-card'], FILTER_SANITIZE_STRING);
        echo json_encode($_POST);

        try {
            $stmt = $conn->prepare("UPDATE card_const SET descripcion =(?) WHERE nombre='$nom'");
            $stmt->bind_param("s", $texto);
            $stmt->execute();
            
            
            $stmt->close();
            $conn->close();
            
        } catch (Exception $e) {
            $respuestaPhp = array(
                'error' => $e->getMessage()
            );
        }
        
        header("Location:inicio-admin");
    }
}



    
 
    if(isset($_POST['actualizarText'])){

        text();
       
    }else{
        title();
    }
    
       
     

?>