<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<?php $aboutImage = get_field('about-header-image') ?>
<header class=blog___header id="nav___anchor" style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url(<?php echo $aboutImage['url'] ?>)">
    <hgroup class="wrapper">
      <h1><?php the_field('about-header') ?></h1>
      <h2><?php the_field('about-tagline') ?></h2>
    </hgroup>
</header>
<main>
  <div class="wrapper">
    <div class="about___team---container">
  <?php while(have_rows('team-info-box')) : the_row(); ?>
      <div class="about___team---box clearfix">
        <div class="inner-wrapper">
        <?php  $teamImage = get_sub_field('team-picture') ?>
        <div class="image-box">
          <img src="<?php echo $teamImage['url'] ?>" alt="">
        </div>
          <div class="text-box">
            <h2><?php the_sub_field('team-name') ?></h2>
            <p><?php the_sub_field('team-tagline') ?></p>        
            <ul class = "about___social">
              <li><a href="<?php the_sub_field('about-linkedin')?>"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="<?php the_sub_field('about-twitter')?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php the_sub_field('about-instagram')?>"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="description">
          <p><?php the_sub_field('team-description') ?></p>
        </div>
      </div>
  <?php endwhile ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>