<?php

defined('ABSPATH') or die( "Bye bye" );

/*
 * Add new admin menu
 */

// El hook admin_menu ejecuta la funcion rai_menu_administrador
add_action( 'admin_menu', 'rai_menu_administrador' );

// Top level menu del plugin
function rai_menu_administrador()
{
	add_menu_page(PLUGIN_NAME, PLUGIN_NAME, 'manage_options', PLUGIN_ROUTE . '/admin/config.php');
    add_options_page(PLUGIN_NAME, PLUGIN_NAME, 'manage_options', 'table2excel', 't2e_options');
}
?>
