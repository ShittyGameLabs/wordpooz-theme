<?php get_header();  ?>
<?php
  $pageId = get_option( 'page_for_posts' );
  $post_id = $page_for_posts
?>


<?php $blogImage = get_field('blog-header-image',$pageId) ?>
<header class=blog___header id="nav___anchor" style="background-image:url(<?php echo $blogImage['url'] ?>)">
    <hgroup class="wrapper">
      <h1><?php the_field('blog-header',$pageId) ?></h1>
      <h2><?php the_field('blog-tagline',$pageId) ?></h2>     
    </hgroup>
</header>
<section class="blog___main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</section> <!-- /.main -->

<?php get_footer(); ?>
