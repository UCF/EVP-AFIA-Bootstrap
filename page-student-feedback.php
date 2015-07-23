<!DOCTYPE>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo "\n".header_()."\n"?>
		<?php 
			// Remove University Header
			wp_dequeue_script('university-header');
			// Add bootstrap responsive
			wp_enqueue_style('bootstrap-responsive', THEME_STATIC_URL.'/bootstrap/bootstrap/css/bootstrap-responsive.css');
		?>
		<?php  $post_type = get_post_type($post->ID);
			if(($stylesheet_id = get_post_meta($post->ID, $post_type.'_stylesheet', True)) !== False
				&& ($stylesheet_url = wp_get_attachment_url($stylesheet_id)) !== False) { ?>
				<link rel='stylesheet' href="<?=$stylesheet_url?>" type='text/css' media='all' />
		<?php } ?>
		<style>
			body { background: none; }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="span12">
				<?php the_content();?>
			</div>
		</div>
		<?php echo "\n".footer_()."\n"?>
		<script type="text/javascript">
			$('iframe').ready(function() {
				var height = this.body.scrollHeight;
				document.getElementById('student-feedback').style.height = height;
			});
		</script>
	</body>
</html>