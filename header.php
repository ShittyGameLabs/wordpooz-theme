<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,400" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<nav>
	<div class="wrapper">
		<?php $custom_logo_id = get_theme_mod( 'custom_logo' );?>
		<?php $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
		<a href="http://meaganpau.com/mwtheme"><img class="nav___logo" src="<?php echo $image[0]; ?> " alt="" /></a>
		<p id="close"> ｘ </p>
		<p id="hamburger"> &#9776; </p>
		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'primary'
		)); ?>
	</div>
</nav>
<body <?php body_class(); ?>>
