<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="../imagenes/logosena.png">
    <link rel="stylesheet" href="../estilos/estilosi.css">
    <link rel="stylesheet" href="/estilos/styleConsulta.css">
   
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
                <li><a href="">Consulta</a></li>
            </ul>
           </nav>
           <a href="BANIN/iniciarsesion.php"><button class="boton_ir">Iniciar sesión</button></a>
        </header>

    <div class="contenedor">
        <div class="buscador">
            <h2>Buscador</h2>
            <form>
                <label for="codigo">Buscar por código:</label>
                <input type="text" id="codigo" name="codigo" placeholder="Ejemplo: 3453"><br><br>

                <label for="documento">Buscar por número de documento:</label>
                <input type="text" id="documento" name="documento" placeholder="Ejemplo: 1073672380"><br><br>

                <button type="submit">Buscar</button>
            </form>
        </div>

        <div class="informacionDeconsulta">
            <h2>Información de la Consulta</h2>
            <p><strong>Código:</strong>26378</p>
            <p><strong>Coordinación Inicial:</strong>ARTICULACIÓN</p>
            <p><strong>Programa:</strong>CONTABILIZACION DE OPERACIONES COMERCIALES Y FINANCIERAS.</p>
        </div>

        <div class="tablaGeneradaPorLaConsulta">
            <h2>Resultados de la Consulta</h2>
            <table>
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Puesto</th>
                        <th>Ponderación</th>
                        <th>Estado BANIN</th>
                        <th>Coordinación Final</th>
                        <th>Traslado</th>
                        <th>Reclamación</th>
                        <th>Protección</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>79314342</td>
                        <td>MANUEL EDUARDO ALEJO DIAZ</td>
                        <td>1</td>
                        <td>95,00</td>
                        <td>Seleccionado</td>
                        <td>COMPLEMENTARIA</td>
                        <td>Confirmado En 29331</td>
                        <td>7-2023-313747</td>
                        <td>7-2023-287082 - NO APROBADA</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <footer>
        
    </footer>

</body>
</html>