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

        <!-- Blog Post static sidebar Start -->

        <?php include 'static-sidebar.php' ?>

    	<!-- Blog Post static sidebar End -->

      </div><!-- /.row -->

	<?php get_footer(); ?>