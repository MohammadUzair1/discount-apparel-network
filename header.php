<?php ?><!doctype html>
<html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width,initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<header class="topbar"><div class="wrap nav">
<a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><span class="brand-mark">D</span><span><?php bloginfo('name'); ?></span></a>
<nav class="navlinks" aria-label="Main navigation"><?php if (has_nav_menu('primary')) { wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s')); } else { ?><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><a href="<?php echo esc_url(dan_page_link('about')); ?>">About</a><a href="<?php echo esc_url(dan_page_link('services')); ?>">Services</a><a href="<?php echo esc_url(dan_page_link('contact')); ?>">Contact</a><?php } ?></nav>
<a class="nav-cta" href="<?php echo esc_url(dan_page_link('contact')); ?>">Contact our team</a>
</div></header>
