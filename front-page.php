<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<?php $heroImage = get_field('header-hero') ?>
<header class="hero" style="background-image:url('<?php echo $heroImage['url']; ?>')">
    <?php $logoImage = get_field('header-logo');  ?>
    <img src="<?php echo $logoImage['url'] ?>"alt="">
    <h1><?php the_field('header-title'); ?></h1>
    <h2><?php the_field('header-tagline'); ?></h2>
    <a href="<?php the_field('header-link')?>"><?php the_field('header-link-text'); ?></a> 
</header>

<?php get_footer(); ?>