<?php $options = get_option(THEME_OPTIONS_NAME);?>
<?php if($options['site_description']):?>
<?php include_once('template-home-default.php');?>
<?php else:?>
<?php include_once('template-home-secondary.php');?>
<?php endif;?>