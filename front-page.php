<?php
/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<?php $heroImage = get_field('header-hero') ?>
<header class="hero" style="background-image:url('<?php echo $heroImage['url']; ?>')">
    <div class="hero-content">
      <?php $headerLogo = get_field('header-logo'); ?>
      <img src="<?php echo $headerLogo['url'] ?>" alt="" />
      <h1><?php the_field('header-title') ?></h1>
      <h2><?php the_field('header-tagline') ?></h2>
      <a class="btn___header" href="<?php the_field('header-link'); ?>"><?php the_field('header-link-text'); ?></a>
    </div>
</header>
<section class="about" id="about">
  <div class="wrapper">
    <h1><?php the_field('about-title'); ?></h1>
    <h2><?php the_field('about-tagline'); ?></h2>
    <div class="about___icons">
    <?php
      while(have_rows('about-icons')) : the_row();
      ?>
        <div class="about___icons---box">
          <?php $imageUrl = get_sub_field('about-icon-image'); ?>
          <img src="<?php echo $imageUrl['url'] ?>" alt="" />
          <h3><?php the_sub_field('about-icon-title'); ?></h3>
          <p>
            <?php the_sub_field('about-icon-content'); ?>
          </p>
        </div>
    <?php endwhile; ?>
  </div>
  </div>
</section>

<?php get_footer(); ?>
