<?php
/*
Plugin Name: Back to top by dCarvajal7
Plugin URI: https://dcarvajal7.es
Description: Plugin that adds a 'back to top' button with configurable css.
Version: 0.0.1
Author: dCarvajal7
Author URI: https://dcarvajal7.es
License: GPL2
*/
defined('ABSPATH') or die("Bye bye");
define('BACK_TO_TOP_BY_DCARVAJAL7_RUTA', plugin_dir_path(__FILE__));
include(BACK_TO_TOP_BY_DCARVAJAL7_RUTA . 'includes/funciones.php');
//include(BACK_TO_TOP_BY_DCARVAJAL7_RUTA . 'includes/opciones.php');
//function loadCSS(){
//    $css = file_get_contents(BACK_TO_TOP_BY_DCARVAJAL7_RUTA . '/public/css/back-to-top.css', true);
//    add_option('back-to-top-css',$css,'','yes');
//}
//register_activation_hook(__FILE__,'loadCSS');
//function deactivation(){
//}
//register_deactivation_hook(__FILE__,'deactivation');
?>
