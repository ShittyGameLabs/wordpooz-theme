<!--/*
	Template Name: Single Blog Post
*/-->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>
<header class='blog___header' style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url('<?php the_post_thumbnail_url('large'); ?>')">
    <hgroup class="wrapper">
      <h1>Blog</h1>
    </hgroup>
</header>
<div class="main blog-content" id="nav___anchor">
  <div class="container">
    <div class="content">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h2 class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </h2><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
