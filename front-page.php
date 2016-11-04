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
<section class="about" id="nav___anchor">
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
<section class="projects" id="projects">
  <div class="wrapper">
    <h1><?php the_field('project-title') ?></h1>
    <h2><?php the_field('project-tagline') ?></h2>
      <div class="project-wrapper">
        <div class="figure-container-1">
        <?php while(have_rows('project-box')) : the_row(); ?>
        <?php $projectImage = get_sub_field('project-image'); ?>
            <figure class="figure1" style="background-image:url('<?php echo $projectImage['url'] ?>')">
              <div class="overlay">
                <div class="project-text">
                  <h3><?php the_sub_field('project-name') ?></h3>
                  <p>
                    <?php the_sub_field('project-description') ?>
                  </p>
                </div>
              </div>
            </figure>
            <?php endwhile; ?>
        </div>
        <div class="figure-container-2">
            <?php while(have_rows('project-box-two')) : the_row(); ?>
            <?php $projectImage = get_sub_field('project-image-two'); ?>
            <figure class="figure2" style="background-image:url('<?php echo $projectImage['url']; ?>')">
              <div class="overlay">
                <div class="project-text">
                  <h3><?php the_sub_field('project-name-two') ?></h3>
                  <p>
                    <?php the_sub_field('project-description-two') ?>
                  </p>
                </div>
              </div>
            </figure>
            <?php endwhile; ?>
        </div>
        <div class="figure-container-3">
            <?php while(have_rows('project-box-three')) : the_row(); ?>
              <?php $projectImage = get_sub_field('project-image-three'); ?>
              <figure class="figure3" style="background-image: url('<?php echo $projectImage['url'] ?>')">
                <div class="overlay">
                  <div class="project-text">
                    <h3><?php the_sub_field('project-name-three') ?></h3>
                    <p>
                      <?php the_sub_field('project-description-three') ?>
                    </p>
                  </div>
                </div>
              </figure>
            <?php endwhile; ?>
        </div>
      </div>
  </div>
</section>
<section class="work">
  <?php while(have_rows('work-container')) : the_row();  ?>
  <?php $workImage = get_sub_field('work-bg-image'); ?>
  <div class="work-container" style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url(<?php echo $workImage['url']?>)">
    <div>
      <h2><?php the_sub_field('work-title') ?></h2>
      <p><?php the_sub_field('work-tagline') ?></p>
    </div>
  </div>
  <?php endwhile; ?>
</section>
<section class="blog">
  <div class="wrapper">
    <h1><?php the_field('blog-title'); ?></h1>
    <h2><?php the_field('blog-tagline'); ?></h2>
    <div class="blog___wrapper">
      <?php
          $recentPosts = new WP_Query(array(
              'posts_per_page' => 3,
              'order' => 'DESC'
              )
      ); ?>
      <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <div class="home___blog---box" id="<?php echo $post->post_name; ?>">
              <div class="blog___background" style="background-image:url(<?php the_post_thumbnail_url('medium'); ?>)">
              </div>
              <?php $commentsNumber = get_comments_number(); ?>
              <?php $blogDate = get_the_date(); ?>
              <p class="blog___comments">
                <span class-="span___date">
                  <i class="fa fa-calendar-o"></i>
                </span>
                  <span><?php echo $blogDate; ?></span>
                <a class="blog___comments---link" href="<?php comments_link(); ?> ">
                  <span class="span___comments">
                    <i class="fa fa-comments-o"></i>
                  </span>
                  <?php echo $commentsNumber; ?>
                </a>
              </p>
              <div class="blog___excerpt">
                <h3><?php the_title(); ?></h3>
                 <p>
                   <?php echo excerpt(20); ?>
                 </p>
                 <a class="blog___readmore" href="<?php the_permalink(); ?>">Read More</a>
              </div>
             </div>
         <?php endwhile; ?>
         <?php wp_reset_query(); ?>
    </div>
  </div>
</section>
<section class="contact">
  <div class="wrapper">
    <div class="contact___wrapper">
      <?php while(have_rows('contact')) : the_row() ?>
        <div class="contact___field">
          <h3><?php the_sub_field('contact-header') ?></h3>
          <p>
            <?php the_sub_field('contact-content') ?>
          </p>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
