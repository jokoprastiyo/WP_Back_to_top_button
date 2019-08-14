<?php
// Top level menu del plugin
function back_to_top_menu_administrador()
{
    add_submenu_page('options-general.php','Back to top button','Back to top button','manage_options', BACK_TO_TOP_BY_DCARVAJAL7_RUTA . '/admin/configuracion.php');
}
add_action( 'admin_menu', 'back_to_top_menu_administrador' );
?>