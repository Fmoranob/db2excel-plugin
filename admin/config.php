<?php

defined('ABSPATH') or die( "Bye bye" );

// Check admin permisions
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.'));

include PLUGIN_URL.'/resources/views/config.php';
