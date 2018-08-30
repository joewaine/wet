<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

get_header(); ?>

<div class="row">
	<div class="container">
  		<div class="col-sm-8">
  			<?php if ( have_posts() ) : ?>
  				<!-- Add the pagination functions here. -->

  				<ul class="blog-posts">
  					<!-- Start of the main loop. -->
					<?php while ( have_posts() ) : the_post();  ?>

				  <li>
				    <?php the_post_thumbnail(); ?>
				    <h1 class="blog-post-title">
				    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    </h1>
				    <br>
					<span class="post-info"><?php the_date(); ?>&nbsp; <?php the_author();?></span>
				    <br>
				    <br>
				    <?php the_excerpt(); ?>
				    <br>
				    <button><a href="<?php the_permalink(); ?>">READ MORE</a></button>
				    <hr>
				  </li>
					<!-- the rest of your theme's main loop -->

					<?php endwhile; ?>
					<!-- End of the main loop -->
				</ul>


			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div><!-- /.col-sm-8 -->

		<div class="col-sm-4 right-column-contact">
			<ul class="cat-list">
			  <li class="top">
			    Filter By Category
			  </li>
			</ul>

			<?php if( have_rows('category_sidebar', 'option') ){ ?>
			    <?php while( have_rows('category_sidebar', 'option') ): the_row(); ?>
					<?php include 'category-repeater-logic.php'; ?>
			    <?php endwhile; ?>
			<?php } ?>
			</div>
		</div><!-- /.col-sm-4 -->
	</div><!-- /.blog-main -->
</div><!-- /.row -->
<div class="row">
	<div class="container blog-pagination">
		<div class="col-sm-12">
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older Posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer Posts' ); ?></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>