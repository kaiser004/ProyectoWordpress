<?php
class ConexionBD
{
    const jugadores_lista = 'tablaJugadores';
    public static function jugadoresInstala()
    {
        global $wpdb;
        $tablaJugadores = $wpdb->prefix . self::jugadores_lista;
        $sql = "CREATE TABLE IF NOT EXISTS " . $tablaJugadores . " (
            ID varchar(30) NOT NULL PRIMARY KEY,
            EQUIPO varchar(30) NOT NULL,
            DORSAL int(2) NOT NULL,
            CONFERENCIA varchar(10) NOT NULL)ENGINE=InnoDB";
       //$sql = "CREATE TABLE IF NOT EXISTS " . $tablaJugadores . " (idempleado` INT(9) NOT NULL AUTO_INCREMENT , `nombreempleado` VARCHAR(255) NOT NULL , `emailempleado` VARCHAR(255) NOT NULL , PRIMARY KEY (`idempleado`)) ENGINE = InnoDB";
       $wpdb->query($sql);
    }


    public static function jugadoresDesinstala()
    {
        global $wpdb;
        $tablaJugadores = $wpdb->prefix . self::jugadores_lista; //LA TABLA jugadores   
        $sql= "DROP TABLE $tablaJugadores";
        $wpdb->query($sql); 
    }

    public static function getJugadores()
    {
        global $wpdb;
        $tablaJugadores = $wpdb->prefix . self::jugadores_lista;
        $jugadores = $wpdb->get_results("SELECT * From $tablaJugadores");
        return (count($jugadores) > 0) ? $jugadores : false;
    }

    public static function addJugadores($datos)
    {
        global $wpdb;
        $tablaJugadores = $wpdb->prefix . self::jugadores_lista;
        $wpdb->query("INSERT INTO " . $tablaJugadores . " (ID, EQUIPO, DORSAL, CONFERENCIA) VALUES ('" . $datos['nombre'] . "','" . $datos['equipo'] . "','" . $datos['dorsal'] . "','" . $datos['conf'] ."')");
        //$wpdb->query("INSERT INTO $tablaJugadores (nombreempleado, emailempleado) VALUES ('juan','juan@juan.juan')"); 
    }

    public static function existe($datos){
        global $wpdb;
        $tablaJugadores = $wpdb->prefix . self::jugadores_lista;
        $jugadores = $wpdb->get_results("SELECT ID From $tablaJugadores");
        if (in_array($datos["nombre"] , $jugadores)) {
            return true;
        }else{
            return false;
        }
    }
}
