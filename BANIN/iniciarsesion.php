<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logosena.png">
    <link rel="stylesheet" href="../estilos/estilosi.css">
    <title>Inicio de Sesión SENA</title>
</head>
<body>
<header>
    <a href="../index.php"><img class="logo" src="../imagenes/logo-sena-blanco.png" alt=""></a> 
       <nav class="menu">
       <ul class="menu-principal">
            <li><a href="">Postulados</a></li>
            <li><a href="">Evaluación</a></li>
            <li><a href="">Seleccionados</a></li>
            <li><a href="">Candidatos</a></li>
        </ul>
       </nav>
       <a href="BANIN/iniciarsesion.php"><button class="boton_ir">Iniciar sesión</button></a>
    </header>
    <div class="contenedor">
        <div class="imagen-contenedor"></div>
        <div class="formulario">
            <img src="../imagenes/logosena.png" alt="Logo SENA" class="logof">
            <!--<h1>INICIO DE SESIÓN</h1>-->
            <form class="login-form" action="" method="post">
                <input type="text" placeholder="Usuario" required>
                <input type="password" placeholder="Contraseña" required>
               <input type="submit" value="Ingresar" name="">
            </form>
        </div>
    </div>
</body>
</html>
