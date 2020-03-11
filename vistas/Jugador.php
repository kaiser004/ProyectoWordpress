<?php
class Jugador 
{
    private $nombre;
    private $equipo;
    private $dorsal;

    function __construct($nombre , $equipo , $dorsal)
    {
        $this->nombre = $nombre;
        $this->equipo = $equipo;
        $this->dorsal = $dorsal;
    }


    function getNombre(){
        return $this->nombre;
    }

    function getEquipo(){
        return $this->equipo;
    }

    function getDorsal(){
        return $this->dorsal;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setEquipo($equipo){
        $this->equipo = $equipo;
    }
    
    function setDorsal($dorsal){
        $this->dorsal = $dorsal;
    }
}
?>