<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="../imagenes/logosena.png">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <title>Inicio de Sesión SENA</title>
</head>
<body>
<header>
<a href="../../index.php"><img class="logo" src="../../assets/img/logos/logo-sena-blanco.png" alt=""></a> 
    <?php
        require '../../assets/header.php';
    ?>
</header>
    <div class="contenedor2">
        <div class="imagen-contenedor"></div>
        <div class="formulario">
            <img src="../../assets/img/logos/logosena.png" alt="Logo SENA" class="logof">
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
               <input type="submit" value="Ingresar" name="Validar" class="boton">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    require '../../bd.php';
    $conn=conectar_db();
    session_start()
    if(isset($_SESSION['numero_documento'])){
        header("Location:../index.php");
    }
    if(!empty($_POST)){
        $num_doc=$_POST['numero_documento'];
        $contraseña=$_POST['contraseña'];

        $num_doc=mysqli_real_escape_string($num_doc)
    }
?>