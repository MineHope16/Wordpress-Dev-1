<!doctype html>
<html <?php language_attributes(); ?>>
<head><meta charset="<?php bloginfo('charset'); ?>" /><meta name="viewport" content="width=device-width,initial-scale=1" /><?php wp_head(); ?></head>
<body <?php body_class(); ?>>
<header class="header"><div class="container" style="display:flex;align-items:center;gap:20px;">
<a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-logo.png" alt="Navjeevan logo" /><div><div class="site-title">Navjeevan Charitable Trust</div><div class="site-tagline" style="color:#fff;opacity:.95;font-size:12px;margin-top:4px;">Empowering Young Minds Since 2010</div></div></a>
<nav class="nav" aria-label="Main navigation"><?php wp_nav_menu(array('theme_location' => 'primary','container' => false,'menu_class' => '','items_wrap' => '%3$s')); ?></nav>
<div style="margin-left:auto;display:flex;gap:8px;align-items:center;"><a class="btn btn-yellow" href="<?php echo esc_url(home_url('/donate')); ?>">Sponsor a Child</a><a class="btn btn-blue" href="<?php echo esc_url(home_url('/donate')); ?>">Donate Now</a></div></div></header><main>