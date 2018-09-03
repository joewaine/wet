<?php

  $content = get_sub_field('content');
  $accordionHasRows = have_rows('accordion_repeater');

  if( !$content && !$accordionHasRows ) {
      return false;
  }
  
  $anchorSlug = get_sub_field('anchor_slug');
  $sidebarOnOff = get_sub_field('sidebar_on_off');
  $textColor = get_sub_field('text_color');
  $backColor = get_sub_field('background_color');
?>

<section <?php if($anchorSlug):?> id="<?php echo $anchorSlug ?>"<?php endif; ?> class="basic-page-content" style="color: <?php echo $textColor?>">
  <div class="container" style="background-color: <?php echo $backColor?>">
    <div class="col-sm-8">
      <?php if($content): ?>
        <?php echo $content; ?>
      <?php endif; ?>
      <?php if($accordionHasRows): ?>
       <div id="accordion">
        <?php while($accordionHasRows): the_row(); ?>
          <?php 
            $item_title = get_sub_field('title');
            $item_content = get_sub_field('content');
            if(!$item_title && !$item_content) {
              break;
            }
          ?>
          <?php if($item_title): ?>
            <h3 class="basic-content-accordion-title">
              <?php the_sub_field('title'); ?>
            </h3>
          <?php endif; ?>
          <?php if($item_content): ?>
            <div class="basic-content-accordion-content">
              <?php the_sub_field('content');  ?>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>

<?php if(get_sub_field('sidebar_on_off')){ ?>
  <?php include 'static-sidebar.php' ?>
<?php } ?>

  </div>
</section>
