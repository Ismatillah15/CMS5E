<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<img src="<?php echo get_template_directory_uri(); ?>/image/HP.jpg" alt="<?php
bloginfo('name'); ?>">
</header>
<nav>
<?php wp_nav_menu(array(
'theme_location' => 'primary',
'container' => false,
'menu_class' => 'nav',
)); ?>
</nav>
<div class="container">
<div class="main-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="post-content">
<?php the_excerpt(); ?>
</div>

<?php endwhile; else : ?>
<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<div class="sidebar">
<?php if (is_active_sidebar('main-sidebar')) : ?>
<?php dynamic_sidebar('main-sidebar'); ?>
<?php endif; ?>
</div>
</div>
<footer>
<p>&copy; <?php echo date('Y'); ?> Universitas Trunojoyo Madura. All rights reserved.</p>
<p>Alamat: Jl. Rajagwz No. 47, Kota Bangkalan, Indonesia</p>
<p>Email: rajagafira47.com | Telepon: 081553696387</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>