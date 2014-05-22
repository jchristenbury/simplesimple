<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php if ( is_single() || is_page() || is_archive() ) {?> <?php wp_title(); ?> | <?php } bloginfo('name');?></title>
	<!-- add favicon --> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>