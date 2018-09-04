<?php
	get_header(); ?>

      <div class="row">
        <div class="container not-found text-center">
          <div class="col-sm-12">
            <h2 class="center"><?php _e( 'Woops, no page here.', 'bootstrapcanvaswp' ); ?></h2>
            <p class="center">
              <a href="<?php echo get_home_url(); ?>">Click here to go back to the home page.</a>
            </p>
          </div><!-- /.blog-main -->
        </div>
      </div><!-- /.row -->

	<?php get_footer(); ?>