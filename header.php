<!DOCTYPE html>

<html <?php language_attributes(); ?> >

	<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title itemprop="title"><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<?php do_action('aesop_inside_body_top');?>

		<header id="aesoptheme-header" itemscope itemtype="http://schema.org/WPHeader" class="clearfix">

		</header>