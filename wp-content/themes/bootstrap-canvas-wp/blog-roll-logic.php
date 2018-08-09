<section class="blog">
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
<h1>categories</h1>
<?php wp_list_categories(); ?>
<h1>tags</h1>
<?php get_tags(); ?>
</div>
</div>
</section>