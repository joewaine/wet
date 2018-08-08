<div class="full-width-area centered-text-module staff-module resources-module">

<?php if(get_sub_field('header')){?>
<div class="container text-center mb-extra">
<h2><?php the_sub_field('header') ?></h2>
<div class="dash">-</div>
<?php if(get_sub_field('description')){?>
<p class="text-center">
<?php the_sub_field('description') ?>
</p>
</div>

<?php }} ?>

  <div id="five" class="container text-center staff 3-per-row resources">

<?php if( have_rows('resource_repeater') ):
    while ( have_rows('resource_repeater') ) : the_row(); ?>

<div class="staff-member">
  <div class="staff-panel resource-panel">
  <img src="<?php the_sub_field('image'); ?>" alt="">
<?php if(get_sub_field('name')){?>
  <div class="first-name"><?php the_sub_field('name'); ?></div>
<?php } ?>

<p class="resource-description"><?php the_sub_field('description'); ?></p>


      <a href="<?php the_sub_field('link'); ?>" class="learn-more">Access</a>

  </div>
  </div>
<?php
    endwhile;
else :
    // no rows found
endif;

?>
<!-- repeate -->
</div>
</div>


