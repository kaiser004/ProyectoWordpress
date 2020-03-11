<?php
if (isset($_POST['nuevo'])) {
    $datos = array();
    $datos["nombre"] = $_POST['nombre'];
    $datos["equipo"] = $_POST['equipo'];
    $datos["dorsal"] = $_POST['dorsal'];
    $datos["conf"] = $_POST['conf'];
    if (!ConexionBD::existe($datos)){
        ConexionBD::addJugadores($datos);
        echo "Jugador añadido";
    }else{
        echo "El jugador ya existe";
    }
} else {
?>
    <form id='form' action="" method="post">
        <div id='datos'>
            <h3>Formulario para añadir nuevos Jugadores</h3>
            <label>Nombre</label>
            <input type="text" name="nombre" required="required" /><br>
            <label>equipo</label>
            <input type="text" name="equipo" required="required" /><br>
            <label>Dorsal</label>
            <input type="text" name="dorsal" required="required" /><br>
            <label>&nbsp;</label>
            <label>Conferencia</label>

            <p style="margin: 0">Este</p> 
            <input type="radio" id="este" name="conf" value="este" selected>
            <p style="margin: 0">Oeste</p> 
            <input type="radio" id="oeste" name="conf" value="oeste">
            <br><br>
            <input type="submit" name="nuevo" value="Añadir" /><br>
        </div>
    </form>
<?php } ?>