<?php

wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

add_action( 'wp_enqueue_scripts', function() {
	if(is_page('contact')) return;
    wp_deregister_script( 'google-recaptcha' );
});

?>