<?php
if (! current_user_can ('manage_options')) wp_die (__ ('You do not have enough rights to access this page.'));

// If the field isn't even in the $_POST, then it's invalid.
if ( isset( $_POST['back-to-top-message'] ) ) { // Input var okay.
    
    // First, validate the nonce and verify the user as permission to save.
    if ( ! ( current_user_can( 'manage_options' ) ) ) {
        // TODO: Display an error message.
        echo 'Validation error';
    }

    // If the above are valid, sanitize and save the option.
    if ( null !== wp_unslash( $_POST['back-to-top-message'] ) ) {
        echo 'Pre update option';
        $value = $_POST['back-to-top-message'] ;
        update_option( 'back-to-top-css', $value );
        echo 'Update option';
    }
}



?>

<div class="wrap">
 
 <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

 <form method="post" action="">
        <div id="universal-message-container">
            <h2>Button css</h2>
 
            <div class="options">
                <p>
                    <label>Edit css button #topbutton and #topbutton:after mandatory use class name #topbutton</label>
                    <br />
                    <input type="text" name="back-to-top-message" value="<?php echo get_option( 'back-to-top-css' ); ?>"/>
                </p>
        </div><!-- #universal-message-container -->
        <?php
            submit_button();
        ?>  
 </form>

</div><!-- .wrap -->
<?php
 ?>