<?php get_header();  ?>

<?php $author_id = get_the_author_meta('ID'); ?>
<?php $authorImage = get_field('author-header-image', 'user_'. $author_id); ?>
<header class="blog___header"  style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url(<?php echo $authorImage['url'] ?>)">
    <hgroup class="wrapper">
      <h1><?php the_author(); ?></h1>
    </hgroup>
</header>
<section class="author" id="nav___anchor">
  <div class="main">
    <div class="container">
      <div class="content">
        <?php
        	/* Queue the first post, that way we know who
        	 * the author is when we try to get their name,
        	 * URL, description, avatar, etc.
        	 */
        	if ( have_posts() )
        		the_post();
        ?>

          <h2>
            <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"></a>
          </h2>
        <?php
        	// If a user has filled out their description, show a bio on their entries.
        	if ( get_the_author_meta('description') ) : ?>

            <h2>About <?php the_author(); ?> </h2>
        		<?php echo get_avatar( get_the_author_meta('user_email'), 60); ?>
        		<?php the_author_meta('description'); ?>
          <?php endif; ?>

        	<?php
        		rewind_posts();
        		get_template_part('loop', 'author');
        	?>
      </div> <!-- /.content -->

      <?php get_sidebar(); ?>

    </div> <!-- /.container -->
  </div> <!-- /.main -->
</section>
<?php get_footer(); ?>
