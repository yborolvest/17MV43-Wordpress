<?php

/*
Template name: Special Template Layout
*/



get_header(); 

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>
		
		<div class="info-box"> <!-- info box -->
			<h4>Disclaimer Text</h4>
			<p>Tempor cillum ab incurreret adipisicing e dolor laborum cupidatat, te quis illum 
				sint possumus, ad nostrud qui eiusmod. Ubi iis quis quid quorum te sed minim ubi 
				dolor. Qui dolor excepteur hic veniam eu ne quorum ingeniis. Esse proident de 
				consectetur aut ingeniis malis quem aliquip nisi. Sed singulis te offendit. 
				Tempor quae nisi excepteur tamen. Ex ut culpa illum anim an varias qui pariatur 
				eu sint, quamquam lorem eram aut quis an iis elit quid sunt laboris. Ex mentitum 
				si deserunt ea senserit adipisicing quo singulis, irure admodum philosophari, 
				ita aut labore offendit. :))))</p>
		
		</div>
		
		
		<?php the_content(); ?>
	</article>
	
<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>