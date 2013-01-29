<?php disallow_direct_load('single-provost_form.php');?>
<?php 
the_post();

$link_url 			= get_post_meta($post->ID, 'provost_form_url', TRUE);
$attachment_id  	= get_post_meta($post->ID, 'provost_form_file', TRUE);

if ($attachment_id) {
	$attachment_url = wp_get_attachment_url($attachment_id);
	$url = $attachment_url;
}

// Fallback link redirects
elseif ($link_url) {
	$url = $link_url;
}
// Absolute fallback to home page
else {
	$url = get_site_url();
}


header('Location: '.$url);
?>