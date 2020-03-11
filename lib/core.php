<?php
add_shortcode('VerJugadores' , 'jugadoresListado');
add_shortcode('Jugador_Nuevo', 'jugadorNuevo');

function jugadoresListado(){
    //obtiene el listado de jugadores

    $jugadores=ConexionBD::getJugadores();
    //--la ruta del plugin -->
    include_once(plugin_dir_path(__FILE__)."../vistas/verJugadores.php");
}

function jugadorNuevo(){
    include_once(plugin_dir_path(__FILE__)."../vistas/AnadirJugador.php");
}
?>