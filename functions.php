<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// function rudr_url_redirects() {

// 	$redirect_rules = array(
// 		array('old'=>'/wordpress/2022/04/','new'=>'/archives/')
        
// 	);
// 	foreach( $redirect_rules as $rule ) :
// 		// if URL of request matches with the one from the array, then redirect
// 		if( urldecode($_SERVER['REQUEST_URI']) == $rule['old'] ) :
// 			wp_redirect( site_url( $rule['new'] ), 301 );
// 			exit();
// 		endif;
// 	endforeach;
// }

add_action('template_redirect', 'rudr_url_redirects');


