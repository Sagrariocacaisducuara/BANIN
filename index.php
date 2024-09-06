    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <script src="assets/JS/code.jquery.com_jquery-3.7.1.min.js"></script>
        <link rel="icon" href="assets/img//logos/logosena.png">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>BANIN</title>
    </head>
    <body>
    <header>
    <a href="index.php"><img class="logo" src="assets/img/logos/logo-sena-blanco.png" alt=""></a> 
        <?php
            require 'assets/header.php';
        ?>
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
                <img src="assets/img/corporativas/Imagen.jpg" alt="" class="img_caja">
            </section>
            <img src="assets/img/corporativas/imagenfondo.jpg" class="img_caja" alt="">
            </section>
            <section class="section_caja">
                <img src="assets/img/corporativas/instructorSENA.jpg" class="img_caja" alt="">
            </section>
        </div>
        </div>
        <!---<label for="r3" class="arrow left">&#10094;</label>
        <label for="r2" class="arrow right">&#10095;</label>-->
        <div id="btn_atras" class="btn_atras">&#60;</div>
        <div id="btn_siguiente" class="btn_siguiente">&#62;</div>
        <script src="assets/JS/slider.js"></script>
    </div>
    <section class="boxes">
        <div class="desc 1">
            <h2>Descripción del sistema</h2>
            <p>BANIN(Banco de Instructores) es una plataforma diseñada para facilitar la evaluación exhaustiva y objetiva de nuestros instructores. Permite a los evaluadores acceder a perfiles, realizar evaluaciones y generar informes detallados.</p>
        </div>
        <div class="desc 2">
            <h2>Características</h2>
            <li>Evaluación de competencias pedagógicas</li>
            <li>Análisis de habilidades técnicas</li>
            <li>Revisión de experiencia y trayectoria</li>
            <li>Informes personalizados</li>
            <li>Seguimiento de progreso</li>
        </div>
        <div class="desc 3">
            <h2>Acceso al Sistema</h2>
            <p>Si eres un evaluador autorizado, ingresa al sistema utilizando tus credenciales. Si necesitas asistencia o tienes preguntas sobre el proceso de evaluación, contacta a nuestro equipo de soporte.</p>
            <button><a href="app/shareFolder/iniciarsesion.php">Acceder</a></button>
        </div>
        </section>
    <footer>
        <div class="social-buttons">
        <i class="fa-brands fa-facebook"><a href="#" target="_blank">Facebook</i></a>
        <i class="fa-brands fa-twitter"><a href="#" target="_blank">Twitter</a>
        </i>
        <i class="fa-brands fa-linkedin"><a href="#" target="_blank">Linkedin</a>
        </i>
        </div>
        <p>&copy; 2024 BANIN - SENA. Todos los derechos reservados.</p>
    </footer>
    </body>
    </html>