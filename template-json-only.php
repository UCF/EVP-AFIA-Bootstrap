<?php
/**
 * Template Name: JSON Only
 **/
disallow_direct_load('template-json-only.php');
the_post();

if ( $post ) {

	$stylesheet_id = get_post_meta( $post->ID, 'page_stylesheet', True );
	$stylesheet_url = '';
	if ( $stylesheet_id !== False ) {
		$stylesheet_url = wp_get_attachment_url( $stylesheet_id );
	}

	$json = array(
		'title' => $post->post_title,
		'content' => wpautop($post->post_content),
		'stylesheet' => $stylesheet_url
	);

	header('Content-Type:application/json');

	echo json_encode($json);
}

?>