<?php
  $category = get_category( get_query_var( 'cat' ) );
  $cat_name = $category->name;
  $args = array(
    'post_type' => 'post',
    'category_name'=> $cat_name,
    'paged'  => get_query_var('paged')
  );
 
  $wp_query = new WP_Query( $args );
	
  get_header(); 

?>
<div class="row">
	<div class="container category-page">
    <div class="col-sm-8 left-column-data">
      <h1 class="category-title">
      	<?php printf( __( 'Category Archives: %s', 'bootstrapcanvaswp' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
  	  </h1>
  	  <?php if($wp_query->have_posts()): ?>
      	  <ul class="blog-posts">
      	  	<?php 
	          while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
	            <li>
	              <?php the_post_thumbnail(); ?>
	              <h1 class="blog-post-title">
	                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	              </h1>
	              <br>
	              <span class="post-info"><?php the_date(); ?>&nbsp;<?php the_author();?></span>
	              <br>    <br>
	              <?php the_excerpt(); ?>
	              <br>
	              <button>
	                <a href="<?php the_permalink(); ?>">READ MORE</a>
	              </button>
	              <hr>
	            </li>
	          <?php endwhile;
	        wp_reset_postdata();?>
  	  	  </ul>
  	  <?php else: ?>
  	  	<div class="container no-posts">
  	  		<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
	          <h2 class="center"><?php _e( 'No posts to display', 'bootstrapcanvaswp' ); ?></h2>
	          <p class="center">
	          <?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'bootstrapcanvaswp' ), admin_url( 'post-new.php' ) ); ?></p>
	        <?php else :
				// Show the default message to everyone else.
			?>
	          <h2 class="center"><?php _e( 'Nothing Found', 'bootstrapcanvaswp' ); ?></h2>
	          <p class="center">
	          <?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'bootstrapcanvaswp' ); ?></p>
			  <?php get_search_form(); ?>
    		<?php endif; // end current_user_can() check ?>
  	  	</div>
  	  <?php endif; ?>
    </div><!-- /.blog-main -->
    <div class="col-sm-4 right-column-contact">
		<ul class="cat-list">
		  <li class="top">
		    Filter By Category
		  </li>
		</ul>
		<?php if( have_rows('category_sidebar', 'option') ): ?>
		    <?php while( have_rows('category_sidebar', 'option') ): the_row(); ?>
				<?php include 'category-repeater-logic.php'; ?>
		    <?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
</div><!-- /.row -->
 <?php
   global $wp_query;
   if ( $wp_query->max_num_pages > 1 ) :
 ?>
  <div class="row">
  	<div class="container blog-pagination">
  		<div class="col-sm-12">
  			<div class="nav-previous alignleft"><?php next_posts_link( 'Older Posts' ); ?></div>
  			<div class="nav-next alignright"><?php previous_posts_link( 'Newer Posts' ); ?></div>
  		</div>
  	</div>
  </div>
 <?php endif; ?>
<?php get_footer(); ?>