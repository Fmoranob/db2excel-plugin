<?php
/*
Plugin Name: Tables to Excel
Plugin URI: ''
Description: Plugins for downloading database tables in excel format
Version: 2.0
Author: Felipe Morano
Author URI: felipemorano.com
License: GLP2
*/

// Evita que un usuario malintencionado ejecute codigo php desde la barra del navegador
defined('ABSPATH') or die( "Bye bye" );

//Aqui se definen las constantes
define('PLUGIN_ROUTE',plugin_dir_path(__FILE__));
define('PLUGIN_NAME','Table to Excel');

//Archivos externos
include(PLUGIN_ROUTE.'/includes/options.php');

