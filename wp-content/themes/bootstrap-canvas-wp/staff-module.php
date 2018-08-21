
<?php 

if( get_row_layout() == 'staff_module' ):

    $anchorSlug = get_sub_field('anchor_slug'); 

  endif;

?>

<div <?php if($anchorSlug):?> id="<?php echo $anchorSlug ?>"<?php endif; ?> class="full-width-area centered-text-module staff-module">

<?php if(get_sub_field('header')){?>
<div class="container text-center mb-extra">
<h2><?php the_sub_field('header') ?></h2>
<div class="dash">-</div>
<?php if(get_sub_field('description')){?>
<p>
<?php the_sub_field('description') ?>
</p>
</div>

<?php }} ?>

<?php if(get_sub_field('3_col_4_col_true_false')){?>
  <div id="three" class="container text-center staff 3-per-row">
<?php }else{?>
  <div id="four"  class="container text-center staff 4-per-row">
<?php } ?>


<?php if( have_rows('member_repeater') ):
    while ( have_rows('member_repeater') ) : the_row(); ?>

<div class="staff-member modal-trigger" data-description="<?php the_sub_field('description'); ?>">
  <div class="staff-panel">
  <img src="<?php the_sub_field('image'); ?>" alt="">
<?php if(get_sub_field('first_name')){?>
  <div class="first-name"><?php the_sub_field('first_name'); ?></div>
<?php } ?>

<?php if(get_sub_field('last_name')){?>
    <div class="last-name"><?php the_sub_field('last_name'); ?></div>
    <?php } ?>
      <a href="" class="learn-more">Learn More</a>
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


