
<?php

  $content = get_sub_field('content');

  if( !$content ) {
      return false;
  }

  $anchorSlug = get_sub_field('anchor_slug');
  $sidebarOnOff = get_sub_field('sidebar_on_off');
  $accordionHasRows = have_rows('accordion_repeater');
  $textColor = get_sub_field('text_color');
  $backColor = get_sub_field('background_color');
?>

<section <?php if($anchorSlug):?> id="<?php echo $anchorSlug ?>"<?php endif; ?> class="basic-page-content" style="color: <?php echo $textColor?>">
  <div class="container" style="background-color: <?php echo $backColor?>">
    <div class="col-sm-8">
      <?php echo $content; ?>
      <?php if($accordionHasRows): ?>
      <div id="accordion">
          <?php while($accordionHasRows): the_row(); ?>
            <?php include 'accordion-repeater-logic.php' ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>

<?php if(get_sub_field('sidebar_on_off')){ ?>
  <?php include 'static-sidebar.php' ?>
<?php } ?>

  </div>
</section>
