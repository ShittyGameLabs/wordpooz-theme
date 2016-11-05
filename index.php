<?php get_header();  ?>
<?php $pageId = get_option( 'page_for_posts' );?>
<?php $blogImage = get_field('blog-header-image',$pageId) ?>
<header class="blog___header" style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url(<?php echo $blogImage['url'] ?>)">
    <hgroup class="wrapper">
      <h1><?php the_field('blog-header',$pageId) ?></h1>
      <h2><?php the_field('blog-tagline',$pageId) ?></h2>
    </hgroup>
</header>
<section class="blog___main" id="nav___anchor">
  <div class="container">
    <div class="content clearfix">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="blog___content">
          <h2><?php the_title(); ?></h2>
          <p class="blog___content---head">
            <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?> ">
              Written by:
              <?php the_author_meta('first_name') ?>
              <?php the_author_meta('last_name') ?>
            </a>
          </p>
          <?php the_post_thumbnail('medium'); ?>
          <?php $commentsNumber = get_comments_number(); ?>
          <?php $blogDate = get_the_date(); ?>
          <p class="blog___content---info">
            <span><?php echo $blogDate; ?></span>
            <span><a href="<?php comments_link(); ?>">Comments: <?php echo $commentsNumber; ?></a></span>
          </p>
          <p>
            <?php echo excerpt(100); ?>
          </p>
          <a class="blog___content--readmore" href="<?php the_permalink(); ?>">Read More</a>
        </article>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
    <?php get_sidebar(); ?>
  </div> <!-- /.container -->
</section> <!-- /.main -->

<?php get_footer(); ?>
