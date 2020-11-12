<?php
    include '../includes/conection.php';
?>

<?php
    include_once '../includes/admin-template.php';
?>


<!-- --------------------- Form agregar banner ------------------>
        <div id="modal" class="modal">
            <div class="body-modal">
                <button id="close" class="btn-close"><i class="fas fa-times"></i></button>
                <h3>Añadir Imagen</h3>
                <form  action="validar_imagen.php" id="guardar" method="POST" enctype="multipart/form-data">
                <div class="form">
                <label for="nombre" >Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Escribe un nombre corto para la imagen">

                <label for="nombre">Texto-descriptivo:</label>
                <input type="text" id="alt" name="alt" placeholder="Escribe un texto descrictivo corto para la imagen">

                <label for="nombre">Imagen:</label>
                <input type="file" id="img" name="imagen">

                </div>

                <input id="add-img" class="submit"  type="submit" value="Guardar" name="guardar">
               
                </form>

            </div>
        </div>

    <!-- --------------------- Form borrar banner ------------------>
        <div id="modal-del" class="modal-del">
            <div class="body-modal-del">
                <button id="closedd" class="btn-close"><i class="fas fa-times"></i></button>
                <h3>Eliminar Imagen</h3>
                <form  action="eliminar_img.php" id="eliminar" method="POST">
                <div class="form">
                    <label for="nombre" >Nombre:</label>
                    <input type="text" id="nombre-del" name="nombre" placeholder="Nombre de imagen...">
                </div>

                <input id="eliminar" class="submit" type="submit" value="Eliminar" name="eliminar">
               
                </form>

            </div>
        </div>

        <!-- --------------------- Form Card ------------------>
        <div id="modal-card" class="modal-card">
            <div class="body-modal-card">
                <button id="closed-card" class="btn-close"><i class="fas fa-times"></i></button>
                <h3>Actualizar Card</h3>
                <form id="form-card" action="update-card.php" id="updatecard" method="POST" enctype="multipart/form-data">
                <div class="form">
                    <label for="nombre" >Nombre de Card a actualizar:</label>
                    <input type="text" id="nombre-card" name="nombre" placeholder="Nombre de card...">
                    <label for="cambio">¿Que campo desea actualizar?</label>
                    <button type="button" id="btnTitle" class="btnopc">Título</button>
                    <button type="button" id="btnText"  class="btnopc">Texto</button>
                    <button type="button" id="btnImage" class="btnopc">Imagen</button>
                    <!--<select name="opc-card" id="opc-card">
                    <option value="0">Escoge una opcion</option>
                    <option name="titleCard"  value="Título">Título</option>
                    <option name="textoCard" value="Texto">Texto</option>
                    <option value="Imagen">Imagen</option>
                     </select><br>-->
                    <input type="text" id="title-card" name="titulo" class="inpOpc" placeholder="Título de card maximo 15 carcteres...">
                    <input type="text" id="text-card" name="text-card" class="inpOpc" placeholder="Texto de card, máximo 170 caracteres">
                    
                    
                </div>
                
                <input id="updateCardTi" class="submit updateCardTi" type="submit" value="Actualizar Título" name="actualizarTitle">
                <input id="updateCardTe" class="submit updateCardTe" type="submit" value="Actualizar Texto" name="actualizarText">
                
                </form>
                <form class="inpOpc"  action="validar_imagen.php"  method="POST" enctype="multipart/form-data">
                <label for="nombre" >Nombre de Card a actualizar:</label>
                    <input type="text" id="nombre-card" name="nombre" placeholder="Nombre de card...">  
                    <label for="imagen">Imagen:</label>
                    <input type="file" id="image-card" name="imagen-card">    
                    <input id="updateCardIm" class="submit updateCardIm" type="submit" value="Actualizar Imagen" name="actualizar">
                </form>
            </div>
        </div>



        
        <div class="body-page">
            <h1 class="page-title">Página De Inicio</h1>
            <div class="table">
                <h2>Banner Principal</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Ruta de imagen</th>
                            <th>Texto alternativo</th>
                            <th>Imagen</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            $sql="SELECT * from banner_index";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                                echo'<tr> 
                                        <td>'.$row['Nombre_img'].'</td>
                                        <td>'.$row['ruta_img'].'</td>
                                        <td>'.$row['alt'].'</td>
                                        <td class="tbl-img"><img  src="../'.$row['ruta_img'].'"></td>
                                        
                                        
                                    </tr>';
                            }
                        ?>
                        
                            
                    </tbody>

                </table>
                <div class="btn-admin">
                    <button id="add" class="add btn">Agregar</button>
                    <button id="delete"class="delete btn">Eliminar</button>
                </div>
            </div>





            <div id="probar" class="table">
                <h2>Cards - Servicios</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Título</th>
                            <th>Texto</th>
                            <th>Imagen</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            $sql="SELECT * from card_const";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                                echo'<tr> 
                                        <td>'.$row['nombre'].'</td>
                                        <td>'.$row['titulo'].'</td>
                                        <td>'.$row['descripcion'].'</td>
                                        <td class="tbl-img"><img  src="../'.$row['ruta_img'].'"></td>
                                        
                                        
                                    </tr>';
                            }
                        ?>
                        
                            
                    </tbody>

                </table>
                <div class="btn-admin">
                    <button id="update-card" class="add btn">Actualizar</button>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="../js/app-cms.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    </body>

</html>