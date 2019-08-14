<?php
/**
 * Enqueue button javascript script.
 */
function back_to_top_add_button_script() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style('back-to-top-css', $plugin_url . '../public/css/back-to-top.css');
    wp_enqueue_script('back-to-top-js', $plugin_url . '../public/js/back-to-top.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'back_to_top_add_button_script' );
/**
 * Add button HTML to the footer section.
 */
function back_to_top_add_scroll_button() {
    echo '<a href="#" id="topbutton"></a>';
}
add_action( 'wp_footer', 'back_to_top_add_scroll_button' );
?>