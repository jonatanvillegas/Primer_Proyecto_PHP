<?php
include 'mostrarTodos.php';
include 'obtenerCiudadesYTipos.php';

$datos = obtenerCiudadesYTipos();
$ciudades = $datos['ciudades'];
$tipos = $datos['tipos'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/customColors.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
</head>

<body>
    <video src="img/video.mp4" id="vidFondo"></video>
    <div class="contenedor">
        <div class="card rowTitulo">
            <h1>Buscador</h1>
        </div>
        <div class="colFiltros">
            <form id="formulario" method="POST">
                <div class="filtrosContenido">
                    <div class="tituloFiltros">
                        <h5>Realiza una búsqueda personalizada</h5>
                    </div>
                    <div class="filtroCiudad input-field">
                        <label for="selectCiudad">Ciudad:</label>
                        <div>
                            
                            <?php
                            foreach ($ciudades as $ciudad) {
                                echo '<option value="' . htmlspecialchars($ciudad) . '">' . htmlspecialchars($ciudad) . '</option>';
                            }
                            ?>
                       
                           
                        </div>
                        <!-- 
                        </select> -->
                    </div>
                    <div class="filtroTipo input-field">
                        <label for="selectTipo">Tipo:</label>
                        
                        
                            <option value="" selected>Elige un tipo</option>
                            <?php
                            foreach ($tipos as $tipo) {
                                echo '<option value="' . htmlspecialchars($tipo) . '">' . htmlspecialchars($tipo) . '</option>';
                            }
                            ?>
                        
                        
                    </div>
                    <div class="filtroPrecio">
                        <label for="rangoPrecio">Precio:</label>
                        <input type="text" id="rangoPrecio" name="precio" value="" />
                    </div>
                    <div class="botonField">
                        <input type="submit" class="btn white" value="Buscar" id="submitButton">
                    </div>
                </div>
            </form>
        </div>
        <div class="colContenido">
            <div class="tituloContenido card">
                <h5>Resultados de la búsqueda:</h5>
                <div class="divider"></div>
                <form method="POST">
                    <button type="submit" name="mostrar_todos" class="btn-flat waves-effect">Mostrar Todos</button>
                </form>
            </div>
            <div id="resultados">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mostrar_todos'])) {
                    mostrarTodos();
                }
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.0.0.js"></script>
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>