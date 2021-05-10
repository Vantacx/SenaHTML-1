   <?php require_once('header.php'); ?>
   <div class="text_center p_30"> <!--Mensaje de bienvenida-->
        <div class="border_top"></div>
       <h1 class="text_roman text-mayus title">Bienvenido</h1>
       <p>ESTÁ ESTRICTAMENTE PROHIBIDO EL ACCESO DE PERSONAL NO AUTORIZADO, LOS PERPETRADORES SERÁN IDENTIFICADOS, LOCALIZADOS Y DETENIDOS</p>
       <button class="p_1020 text_roman text-mayus my_30"><a class="tex_color" href="#">Leer mas</a></button>
   </div>
   <div class="content"> <!--Contenedor de imagenes-->
       <div class="fila"> <!--Primera fila-->
           <div class="columna">
               <div class="filtro"></div>
               <img src="/proyecto/imagenes/imagen1.jpeg">
               <div class="medio">
                   <div class="border_top"></div>
                   <h1 class="text_roman text-mayus title text_center">Viaja seguro</h1>
                   <div class="border_top"></div>
               </div>
            </div>
            <!-- Columna uno-->
           <div class="columna">
               <div class="filtro"></div>
               <img src="/proyecto/imagenes/imagen3.jpeg">
               <div class="medio">
                   <div class="border_top"></div>
                   <h1 class="text_roman text-mayus title text_center">xd</h1>
                   <div class="border_top"></div>
               </div>
            </div>
            <!-- Columna dos-->
       </div>
       <div class="fila"> <!--Segunda fila-->
            <div class="columna">
               <div class="filtro"></div>
               <img src="/proyecto/imagenes/imagen4.jpeg">
               <div class="medio">
                   <div class="border_top"></div>
                   <h1 class="text_roman text-mayus title text_center"></h1>
                   <div class="border_top"></div>
               </div>
            </div> <!-- Columna uno-->
           <div class="columna">
               <div class="filtro"></div>
               <img src="/proyecto/imagenes/imagen5.jpeg">
               <div class="medio">
                   <div class="border_top"></div>
                   <h1 class="text_roman text-mayus title text_center"></h1>
                   <div class="border_top"></div>
               </div>
            </div>  <!-- Columna dos-->
       </div>
    </div>
   <div class="p_30 text_center"> <!--Comienzo de reservacion-->
        <div class="border_top"></div>
        <form action="inicio.php">
            <h1 class="text_roman text-mayus title text_center">Reservacion</h1>
            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text"><br><br>

            <label for="fecha">Fecha</label><br>
            <input id="fecha" type="date" class="tex_color">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" cols="100" rows="8"></textarea><br>

            <div class="p_30">
                <button class="text_roman text-mayus p_1020"type="submit">Enviar</button>
                <button class="text_roman text-mayus p_1020"type="reset">Borrar</button>
            </div>
        </form>
   </div>
    <?php require_once('footer.php'); ?>