
<div id="photos-section">
	<hr class="t-margin0" />
	<div class="container-fluid no-gutter">
		<h3 class="h1 white tac">Photos</h3>
		<div class="animation" data-animation="animation-fade-in-down">
		<div class="row" id="photo-gallery">
			<?php if(get_field('image_gallery')) : ?>

			<?php while(has_sub_field('image_gallery')) : ?>
			<div class="col-sm-2 col-xs-3">
				<div class="image-wrap">
					<?php $image = get_sub_field('image'); ?>
					<a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['med-thumb']; ?>" class="img-responsive"/></a>
				</div>
			</div>
			<?php endwhile; ?>

			<?php endif; ?>
		</div><!-- /row -->
		</div>
	</div><!-- /container -->
</div><!-- #photos-section -->
