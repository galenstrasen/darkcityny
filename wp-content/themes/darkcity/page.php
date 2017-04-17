<?php get_header(); ?>

<main id="page-wrap" class="page-content basic">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <article class="main-content">
          <h1 class="page-title"><?php the_title(); ?></h1>
				  <?php the_content(); ?>
        </article>
			</div>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <div class="relative animation" data-animation="animation-fade-in-down">
    <div class="anchor" id="rates-anchor"></div>
    <?php get_template_part('partials/rates'); ?>
  </div><!-- /relative -->

  <div class="relative animation" data-animation="animation-fade-in-down">
    <div class="anchor" id="photos-anchor"></div>
    <?php get_template_part('partials/photos'); ?>
  </div><!-- /relative -->

  <div class="relative animation" data-animation="animation-fade-in-down">
    <div class="anchor" id="equipment-anchor"></div>
    <?php get_template_part('partials/equipment'); ?>
  </div><!-- /relative -->

  <div class="relative animation" data-animation="animation-fade-in-down">
    <div class="anchor" id="projects-anchor"></div>
    <?php get_template_part('partials/projects'); ?>
  </div><!-- /relative -->

  <div class="relative animation" data-animation="animation-fade-in-down">
    <div class="anchor" id="contact-anchor"></div>
    <?php get_template_part('partials/contact'); ?>
  </div><!-- /relative -->

</main>


<?php
get_footer();