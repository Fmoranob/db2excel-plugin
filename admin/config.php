<?php

defined('ABSPATH') or die( "Bye bye" );

// Check admin permisions
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.'));
?>
	<div class="wrap">
		<h2><?php _e( 'Table to Excel', 'table2excel' ) ?></h2>
		Bienvenido a la configuración de ejemplo
	</div>
<?php
?>
