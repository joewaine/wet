<?php 

if( get_row_layout() == 'blog_roll' ):

    $anchorSlug = get_sub_field('anchor_slug'); 

  endif;

?>

<section <?php if($anchorSlug):?> id="<?php echo $anchorSlug ?>"<?php endif; ?> class="blog">
<div class="container">
<div class="col-sm-8">
  <br>
<ul class="blog-posts">
<?php global $post;
$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
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
    <button><a href="<?php the_permalink(); ?>">READ MORE</a></button>
    <hr>
  </li>
<?php endforeach;
wp_reset_postdata();?>
</ul>
</div>
<div class="col-sm-4">

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
</div>
</section>