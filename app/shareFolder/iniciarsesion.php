<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="../imagenes/logosena.png">
    <link rel="stylesheet" href="../estilos/estilosi.css">
    <title>Inicio de Sesión SENA</title>
</head>
<body>
<header>
    <a href="../index.php"><img class="logo" src="../imagenes/logo-sena-blanco.png" alt=""></a> 
       <nav class="menu">
       <ul class="menu-principal">
            <li><a href="">Candidatos</a></li>
            <li><a href="Evaluar/Evaluacion.php">Proceso de Evaluación</a></li>
            <li><a href="">Criterios</a></li>
            <li><a href="">Seleccionados</a></li>
            <li><a href="/BANIN/evaluador/moduloConsulta.html">Consulta</a></li>
        </ul>
       </nav>
       <a href="iniciarsesion.php"><button class="boton_ir">Iniciar sesión</button></a>
    </header>
    <div class="contenedor">
        <div class="imagen-contenedor"></div>
        <div class="formulario">
            <img src="../imagenes/logosena.png" alt="Logo SENA" class="logof">
            <!--<h1>INICIO DE SESIÓN</h1>-->
            <form class="login-form" action="" method="post">
                <label for="">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Usuario" required>
                </label>
                <label for="">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Contraseña" required>
                <i class="fa-solid fa-eye"></i>
                </label>
               <input type="submit" value="Ingresar" name="" class="boton">
            </form>
        </div>
    </div>
</body>
</html>
