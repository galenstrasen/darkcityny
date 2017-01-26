<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
	<h1 class="tac"><?php the_title(); ?></h1>
								<?php the_content(); ?>
				
<?php endwhile; endif; ?>
<?php get_footer(); ?>
