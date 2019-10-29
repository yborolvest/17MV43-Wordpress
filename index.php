<h1>Hello World</h1>
  <?php

  get_header();

/* The Loop */
if ( have_posts() ) {
      while ( have_posts() ) {
            the_post();
}
<h2><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?></a></h2>
<?php the_content(); ?>

} else {
echo "<p>No Content Found.</p>";
}
get_footer();
 ?>
