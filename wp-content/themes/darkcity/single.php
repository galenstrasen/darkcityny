<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">	
	
	<div id="post-header-wrap">
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-7 col-sm-offset-1">	
					
					<h1 class="h2"><?php the_title(); ?></h1>
					
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
		
		<?php 
			if(in_category(7)){ $backlink = '/news/'; } // News
			elseif(in_category(8)){ $backlink = '/blog/'; } // Blog
			elseif(in_category(9)){ $backlink = '/the-campaign/campaign-voices/'; } // Voices
			elseif(in_category(10)){ $backlink = '/photos-stories/'; } // Photos & Stories
			else { $backlink = '/'; }
		?>
		
		<a href="<?php echo $backlink; ?>" class="btn btn-gray btn-sm absolute back-btn">Back</a>
		
	</div><!-- #post-header-wrap -->
	
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-sm-7 col-sm-offset-1">
			
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('x-large', array('class' => 'img-responsive post-feat-img')); }  ?>
				
				<?php $date = get_field('public_date'); if($date) :?>
					<p class="gray"><em><?php the_field('public_date') ?></em></p> 
				<?php endif; ?>
				
				<?php the_content(); ?>
				
				<?php get_template_part('partials/post/author'); ?>
				
				<?php if(in_category(7) || in_category(8)){ ?>
					<div class="share-tags">
						<?php get_template_part('partials/global/share'); ?>
						<div class="tags">
						<a href="#" class="btn-icon btn-icon-sm btn-ghost btn-gray"><i class="fa fa-tags"></i></a>
						<div class="pull-left">
						<?php
$posttags = get_the_tags();
if ($posttags) :
  foreach($posttags as $tag) : ?>
  <span class="tag"><?php echo $tag->name; ?></span>
  <?  endforeach; endif; ?>
						</div>
						</div>
					</div><!-- /share-tags -->
					
				<?php } else { get_template_part('partials/global/share'); }?>
			</div><!-- /col -->

			<?php get_sidebar(); ?>
		
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php get_template_part('partials/global/slice-select'); ?>
</div><!-- #page-wrap -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
