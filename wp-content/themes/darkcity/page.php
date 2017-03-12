<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <main id="page-wrap" class="page-content basic">
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
  </main>
<?php endwhile; endif; ?>
<?php //edit_post_link();

get_footer(); ?>
