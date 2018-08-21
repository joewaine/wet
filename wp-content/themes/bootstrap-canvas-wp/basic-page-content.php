
<?php
$content = get_sub_field('content');

if( get_row_layout() == 'staff_module' ):
    $anchorSlug = get_sub_field('anchor_slug'); 
endif;

?>

<?php if($content){?>

<section <?php if($anchorSlug):?> id="<?php echo $anchorSlug ?>"<?php endif; ?> class="basic-page-content">
<div class="container">
<div class="col-sm-8">
<?php the_sub_field('content'); ?>



<?php if( have_rows('accordion_repeater') ): ?>
<div id="accordion">
    <?php while( have_rows('accordion_repeater') ): the_row(); ?>
      <?php include 'accordion-repeater-logic.php' ?>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

</div>


<?php if(get_sub_field('sidebar_on_off')){ ?>
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
    </div>
<?php } ?>

</div>
</section>
<?php } ?>