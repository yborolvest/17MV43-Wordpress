<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post <?php if ( has_post_thumbnail() ) { ?> has-thumbnail <?php } ?> ">
		
		
		<!-- thumbnail -->
		
		<div class="post-thumbnail">
			<?php the_post_thumbnail('small-thumbnail'); ?>
		</div>
		
		<!-- title & content -->
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>		
		
		<?php the_content(); ?>
	</article>

<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>