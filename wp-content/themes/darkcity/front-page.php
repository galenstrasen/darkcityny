<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

<div id="page-wrap">

	<div class="relative">
		<div class="anchor" id="about-anchor"></div>
		<?php get_template_part('partials/about'); ?>
	</div><!-- /relative -->
	
	<div class="relative">
		<div class="anchor" id="rates-anchor"></div>
		<?php get_template_part('partials/rates'); ?>	
	</div><!-- /relative -->
		
	<div class="relative">
		<div class="anchor" id="photos-anchor"></div>
		<?php get_template_part('partials/photos'); ?>
	</div><!-- /relative -->
	
	<div class="relative">
		<div class="anchor" id="equipment-anchor"></div>
		<?php get_template_part('partials/equipment'); ?>
	</div><!-- /relative -->
	
	<div class="relative">
		<div class="anchor" id="projects-anchor"></div>
		<?php get_template_part('partials/projects'); ?>
	</div><!-- /relative -->
	
	<div class="relative">
		<div class="anchor" id="contact-anchor"></div>
		<?php get_template_part('partials/contact'); ?>
	</div><!-- /relative -->
	
</div><!-- #page-wrap -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
