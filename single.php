<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main"	class="site-main" role=main>
			
		<?php
			
		while ( have_posts() ) : the_post();
			
			the_post_thumbnail('banner-image');
			
			?>
			
			<h2><?php the_title(); ?></h2>
			
			<?php the_content();
			  
			endwhile; ?>
		</main>
	</div>
<?php get_footer(); ?>
		