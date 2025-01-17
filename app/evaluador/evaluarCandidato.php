<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Postulados</title>
    <link rel="icon" href="../../assets/img/logos/logosena.png">
    <link rel="stylesheet" href="../../assets/css/evaluar.css">
</head>
<body>
    <?php
        require '../../app/config.php'; 
        require '../../app/shareFolder/header.php';
    ?>

    <div class="contenedor">
        <div class="infoVacante">
            <div class="titulo">
                <h1>Lista de Postulados</h1>
            </div>
            <div class="info">
                <p class="ps"><strong>Vacantes:</strong> 2</p>
                <p><strong>Postulados:</strong> 7</p>
            </div>
        </div>

        <div class="info-container" id="infoContainer">
            <p><strong>Codigo BANIN:</strong> 32926</p>
            <p><strong>Codigo Contratación postulación APE:</strong> 29913</p>
            <p><strong>Proyecto / Coordinación:</strong> SER</p>
            <p><strong>Instructor Evaluador:</strong> Rodríguez Ruíz William Rolando</p>
            <p><strong>PROGRAMA DE FORMACION :</strong> EMPRENDEDOR EN ALTERNATIVAS AGROPECUARIAS PARA UNA PRODUCCION SOSTENIBLE</p>
        </div>
        
        <div class="perfilInstructor">
            <div id="profileDescription" class="hidden" style="background-color: #f7f7f7;padding: 20px;border-radius: 8px;border: 1px solid #ccc;margin-bottom: 20px;grid-template-columns: 1fr;gap: 10px;">
                <p><strong>Numero Documento:</strong> 32926</p>
                <p><strong>Nombere:</strong> 29913</p>
                <p><strong>Link Perfil APE:</strong> SER</p>
            </div>
        </div>

        <p><strong>Perfil Vacante:</strong> 
            <button class="perfil-btn" type="submit" id="toggleButton">Mostrar</button>
        </p>
        
        <div id="profileModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="Perfil">
                    <h1 style="font-size: 1vw;">Opción 1: Título profesional como médico veterinario, médico veterinario y zootecnista, zootecnista. 
                        Opción 2: Tecnólogo y/o técnico en producción animal, producción agropecuaria.</h1>
                </div>
            </div>
        </div>
        
        <!-- Modal para la Experiencia -->
        <div id="experienceModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 class="experiencia">Experiencia laboral: experiencia comprobada en producción animal, sanidad animal, agroecología y/o 
                    desarrollo rural como mínimo 6 meses en docencia y un año en el área.</h1>
            </div>
        </div>
        
        <div class="info-candidato" id="infocandidato" onclick="toggleInfo()">
            <div class="info-hidden" id="infoHidden">
                <div class="container">
                    <div class="ver-perExp">
                        <button style="background-color: #00ac00; color: white; padding: 6px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;" id="openProfile">Perfil</button>
                        <button style="background-color: #00ac00; color: white; padding: 6px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease; margin-top: 3px;" id="openExperience">Experiencia</button>
                    </div>
                </div>
            </div>
        </div>

        <form action="#" method="post">
            <label for="observacion">Observación No Cumplimiento:</label>
            <input type="text" id="observacion" name="observacion"><br><br>
        
            <label for="experiencia_tecnica">Experiencia Técnica (Expresada en años):</label>
            <input type="number" id="experiencia_tecnica" name="experiencia_tecnica" min="0"><br><br>
        
            <label for="puntuacion_experiencia_tecnica">Puntuación Experiencia Técnica:</label>
            <input type="number" id="puntuacion_experiencia_tecnica" name="puntuacion_experiencia_tecnica" min="0" max="100"><br><br>
        
            <label for="experiencia_docente">Experiencia Docente (Expresada en años):</label>
            <input type="number" id="experiencia_docente" name="experiencia_docente" min="0"><br><br>
        
            <label for="puntuacion_experiencia_docente">Puntuación Experiencia Docente:</label>
            <input type="number" id="puntuacion_experiencia_docente" name="puntuacion_experiencia_docente" min="0" max="100"><br><br>
        
            <label for="experiencia_instructor">Experiencia Instructor (Expresada en años):</label>
            <input type="number" id="experiencia_instructor" name="experiencia_instructor" min="0"><br><br>
        
            <label for="puntuacion_experiencia_instructor">Puntuación Experiencia Instructor:</label>
            <input type="number" id="puntuacion_experiencia_instructor" name="puntuacion_experiencia_instructor" min="0" max="100"><br><br>
        
            <label for="experiencia_formulacion">Experiencia en formulación de proyectos productivos rurales:</label>
            <input type="text" id="experiencia_formulacion" name="experiencia_formulacion"><br><br>
        
            <label for="puntuacion_experiencia_formulacion">Puntuación Experiencia:</label>
            <input type="number" id="puntuacion_experiencia_formulacion" name="puntuacion_experiencia_formulacion" min="0" max="100"><br><br>
        
            <label for="experiencia_comunidades">Experiencia trabajando con comunidades rurales en temáticas de emprendimiento y/o innovación rural:</label>
            <input type="text" id="experiencia_comunidades" name="experiencia_comunidades"><br><br>
        
            <label for="puntuacion_experiencia_comunidades">Puntuación Experiencia:</label>
            <input type="number" id="puntuacion_experiencia_comunidades" name="puntuacion_experiencia_comunidades" min="0" max="100"><br><br>
        
            <label for="sumatoria_experiencia">Sumatoria Experiencia:</label>
            <input type="number" id="sumatoria_experiencia" name="sumatoria_experiencia" min="0"><br><br>
        
            <label for="poblacion_vulnerable">Pertenece a población vulnerable:</label>
            <input type="text" id="poblacion_vulnerable" name="poblacion_vulnerable"><br><br>
        
            <label for="puntuacion_poblacion_vulnerable">Puntuación Población Vulnerable:</label>
            <input type="number" id="puntuacion_poblacion_vulnerable" name="puntuacion_poblacion_vulnerable" min="0" max="100"><br><br>
        
            <label for="arraigo">Arraigo:</label>
            <input type="text" id="arraigo" name="arraigo"><br><br>
        
            <label for="puntuacion_arraigo">Puntuación Arraigo:</label>
            <input type="number" id="puntuacion_arraigo" name="puntuacion_arraigo" min="0" max="100"><br><br>
        
            <label for="certificacion_competencias">Acredita Certificación de Competencias:</label>
            <input type="text" id="certificacion_competencias" name="certificacion_competencias"><br><br>
        
            <label for="puntuacion_certificacion">Puntuación Certificación Competencias:</label>
            <input type="number" id="puntuacion_certificacion" name="puntuacion_certificacion" min="0" max="100"><br><br>
        
            <label for="formacion_trabajo">Presenta Formación para el Trabajo:</label>
            <input type="text" id="formacion_trabajo" name="formacion_trabajo"><br><br>
        
            <label for="puntuacion_formacion_trabajo">Puntuación Formación para el Trabajo:</label>
            <input type="number" id="puntuacion_formacion_trabajo" name="puntuacion_formacion_trabajo" min="0" max="100"><br><br>
        
            <label for="nivel_academico">Nivel Académico:</label>
            <input type="text" id="nivel_academico" name="nivel_academico"><br><br>
        
            <label for="puntuacion_nivel_academico">Puntuación Nivel Académico:</label>
            <input type="number" id="puntuacion_nivel_academico" name="puntuacion_nivel_academico" min="0" max="100"><br><br>
        
            <input type="submit" value="Enviar">
        </form>

    </div>

    <footer>
        <div>
            <h1 class="tituloFooter">Nosotros</h1>
        </div>
    </footer>
    <script src="../../assets/js/ocultarInfo.js"></script>
    <script src="../../assets/js/mensajeEmergente.js"></script>
    <script src="../../assets/js/ventana.js"></script>
</body>
</html>