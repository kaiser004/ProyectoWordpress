<?php
/*Plugin Name: JugadoresNBA
Plugin URI: 
Description: Plugin necesario para ver/añadir Empleados 
Author: AlvaroJonhatan
Author URI: http:// / 
*/ 
 
/*  Copyright 2020 Jonathan Lopez-Álvaro Colás  This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation. 
  
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details. 
 
You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA */


include_once(dirname(__FILE__).'/lib/includes.php');
include_once(dirname(__FILE__).'/lib/ConexionBD.php');
register_activation_hook(__FILE__,'ConexionBD::jugadoresInstala');
register_deactivation_hook(__FILE__,'ConexionBD::jugadoresDesinstala');
?>