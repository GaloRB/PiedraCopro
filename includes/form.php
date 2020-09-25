<div class="contenedor-formulario">
            <h4>¡Pide tu cotizacion o solicita una cita!</h4>
            <form action="enviar.php" method="POST">
                <fieldset>
                    <legend>Información de contácto</legend>


                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre">



                    <label for="apellido">Primer apellido: </label>
                    <input type="text" name="apellido" id="apellido" placeholder="Escribe tu primer apellido">



                    <label for="numero">Número telefónico: </label>
                    <input type="tel" name="tel" id="tel" placeholder="Escribe tu número">




                    <label for="email">Correo Electronico: </label>
                    <input type="email" name="email" id="emal" placeholder="Escribe tu correo">



                    <label for="mensaje">Escribe un breve mensaje si necesitas una cita o cotizacion: </label>
                    <textarea name="mensaje" id="mensaje"></textarea>

                    <input class="btn-enviar" type="submit" value="Enviar">


                </fieldset>
            </form>
        </div>