<?php
/**
 * Template for displaying all single posts
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

      <div class="row">
        <div class="col-sm-8">
          <?php get_template_part( 'loop', 'single' ); ?>
        </div><!-- /.blog-main -->
        <div class="col-sm-4 right-column-contact">
		  <h4>Keep up with the ensemble</h4>
		  <button><a target="_blank" href="<?php the_field('mailing_list_link', 'option'); ?>">join our mailing list</a></button>
		  <h4>social media</h4>
		<?php if( have_rows('social_links', 'option') ): ?>
		  <ul class="social-links right-bar">
		    <?php while( have_rows('social_links', 'option') ): the_row(); ?>
		      <?php include 'social-repeater-logic.php' ?>
		    <?php endwhile; ?>
		  </ul>
		<?php endif; ?>
    	</div><!-- /.col-sm-4 -->
      </div><!-- /.row -->

	<?php get_footer(); ?>