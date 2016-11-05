<!--/*
	Template Name: Single Blog Post
*/-->

<?php get_header(); ?>
<?php $blogImage = the_sub_field('blog-header-image') ?>
<header class='post___header' id="nav___anchor" style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url(<?php $blogImage ?>)">
  <h1>Blog</h1>
</header>
<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->

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