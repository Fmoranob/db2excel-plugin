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

// Call setup when plugin is active
function pluginprefix_activate() {
    // Add option to active setup page.
    add_option('setup_complete', false, '', 'yes');
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );

// Add plugin to admin menu
add_action('admin_menu', 'addToAdminMenu');

function addToAdminMenu(){
    add_menu_page( 'Descarga de Formularios', 'Descarga de Formularios', 'manage_options', 'bd2excel', 'initPlugin' );
}

function initPlugin(){
    require_once('download-db-admin.php');
}


// Evita que un usuario malintencionado ejecute codigo php desde la barra del navegador
defined('ABSPATH') or die( "Bye bye" );

//Aqui se definen las constantes
define('PLUGIN_ROUTE',plugin_dir_path(__FILE__));
define('PLUGIN_NAME','Table to Excel');

//Archivos externos
include(PLUGIN_ROUTE.'/includes/options.php');

//Se filtran en el toolbar de TinyMCE nº2 los botones de seleccionar fuente, seleccionar tamano y subrayado.
 function rai_nuevos_botones($botones) 
 {	
	$botones[] = 'fontselect';
	$botones[] = 'fontsizeselect';
	$botones[] = 'underline';
	return $botones;
}
add_filter( 'mce_buttons_2','rai_nuevos_botones');