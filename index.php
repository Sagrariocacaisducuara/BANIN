<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <link rel="icon" href="imagenes/logosena.png">
    <title>BANIN</title>
</head>
<body>
    <header>
    <a href="index.php"><img class="logo" src="imagenes/logo-sena-blanco.png" alt=""></a> 
       <nav class="menu">
       <ul class="menu-principal">
            <li><a href="">Candidatos</a></li>
            <li><a href="BANIN/Evaluar/Evaluacion.php">Proceso de Evaluación</a></li>
            <li><a href="">Criterios</a></li>
            <li><a href="">Seleccionados</a></li>
        </ul>
       </nav>
       <a href="BANIN/iniciarsesion.php"><button class="boton_ir">Iniciar sesión</button></a>
    </header>
    <div class="contenedor">
        <div id="banner">
        <div id="slider" class="slider">
        <div id="caja" class="caja">
        <section class="section_caja">
        <div class="texto">
            <h1>Sistema de Evaluación de Instructores</h1>
            <p>Herramienta integral para evaluar y potenciar habilidades de nuestros instructores</p>
            </div>
            <section class="section_caja">
                <img src="imagenes/Imagen.jpg" alt="" class="img_caja">
            </section>
            <img src="imagenes/imagenfondo.jpg" class="img_caja" alt="">
            </section>
            <section class="section_caja">
                <img src="imagenes/instructorSENA.jpg" class="img_caja" alt="">
            </section>
        </div>
        </div>
        <!---<label for="r3" class="arrow left">&#10094;</label>
        <label for="r2" class="arrow right">&#10095;</label>-->
        <div id="btn_atras" class="btn_atras">&#60;</div>
        <div id="btn_siguiente" class="btn_siguiente">&#62;</div>
        <script src="JS/slider.js"></script>
    </div>
<footer>
</footer>
</body>
</html>
<!---<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="icon" href="imagenes/logosena.png">
    <title>BANIN</title>
</head>
<body>
    <header>
    <a href="index.php"><img class="logo" src="imagenes/logo-sena-blanco.png" alt=""></a> 
       <nav class="menu">
       <ul class="menu-principal">
            <li><a href="">Candidatos</a></li>
            <li><a href="BANIN/Evaluar/Evaluacion.php">Proceso de Evaluación</a></li>
            <li><a href="">Criterios</a></li>
            <li><a href="">Seleccionados</a></li>
        </ul>
       </nav>
       <a href="BANIN/iniciarsesion.php"><button class="boton_ir">Iniciar sesión</button></a>
    </header>
    <div class="contenedor">
        <div class="slidershow middle">
            <div class="slides">
                <input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">
                <input type="radio" name="r" id="r3">
                <div class="slide s1">
                    <img src="imagenes/Imagen.jpg" alt="">
                    <div class="texto">
                        <h1>Sistema de Evaluación de Instructores</h1>
                        <p>Herramienta integral para evaluar y potenciar habilidades de nuestros instructores</p>
                    </div>
                </div>
                <div class="slide s2">
                    <img src="imagenes/imagenfondo.jpg" alt="">
                </div>
                <div class="slide s3">
                    <img src="imagenes/instructorSENA.jpg" alt="">
                </div>
                <div class="navigation">
                    <label for="r1" class="bar"></label>
                    <label for="r2" class="bar"></label>
                    <label for="r3" class="bar"></label>
                </div>
                </div>
            </div>
        <div class="descripcion">
            <div class="column desc1">
            <div class="contenido_desc">
            <h3>Descripción del Sistema</h3>
            <p>BANIN es una plataforma diseñada para facilitar la evaluación exhaustiva y objetiva de nuestros instructores. Permite a los evaluadores acceder a perfiles, realizar evaluaciones y generar informes detallados.</p>
            </div>
        </div>
        <div class="column desc2">
            <div class="contenido_desc"><h3>Características Principales</h3>
            <ul>
                <li>Evaluación de competencias pedagógicas</li>
                <li>Análisis de habilidades técnicas</li>
                <li>Revisión de experiencia y trayectoria</li>
                <li>Informes personalizados</li>
                <li>Seguimiento de progreso</li>
            </ul>
        </div>
        </div>
        <div class="column desc3">
            <div class="contenido_desc">
            <h3>Información</h3>
             <p>Si eres un candidato y necesitas obtener información o hacer seguimiento a tu postulación puedes ingresar y hacerlo desde la plataforma.</p>
            </div>
         </div>
    </div>
</div>
<footer>

</footer>
</body>
</html>
