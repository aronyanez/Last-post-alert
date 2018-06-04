<?php



add_action( 'get_footer', 'alert_code', 10);
add_action( 'wp_enqueue_scripts', 'styles' );




function styles() {
	wp_enqueue_style( 'style-custom', plugins_url( 'last-post-alert/public/css/style.css' ) );
	wp_enqueue_style('Anton','https://fonts.googleapis.com/css?family=Anton');
	wp_enqueue_style( 'animate', plugins_url( 'last-post-alert/public/css/animate.css' ) );
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'script-custom', plugins_url( 'last-post-alert/public/js/script.js'),  array('jquery'), null, true);
}



function alert_code() {
	if (is_home()){
		$args = array( 'numberposts' => '1' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
			?>

			<div class="alert">
			<a class="close" ><i class="far fa-times-circle"></i>Cerrar</a>
			<a class="title-post" href=" <?= get_permalink($recent['ID']) ?> "> 
			<i class="far fa-newspaper"></i>
			<?= $recent['post_title'] ?></a>

			</div>

			<?php 

		}
		wp_reset_query();
	}
}
