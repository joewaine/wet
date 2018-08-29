<?php

  $full_width_hero = get_sub_field('full_width_hero');

  if( !$full_width_hero ) {
      return false;
  }

  $anchorSlug = $full_width_hero['anchor_slug'];
  $img = $full_width_hero['image'];
  $imgPos = $full_width_hero['image_position'];
  $imgBackColor = ($full_width_hero['image_background_color']) ? $full_width_hero['image_background_color'] : '';
  $blackText = ($full_width_hero['black_text']) ? ' black-text' : '';
  $headerLink = $full_width_hero['header_link'];
  $header = $full_width_hero['header'];
  $date = $full_width_hero['date'];
  $desc = $full_width_hero['description'];
  $ctaLink = $full_width_hero['cta_link'];
  $ctaText = $full_width_hero['cta_text'];
?>

<div class="full-width-mod container front-page-modules">

  <!-- Hero Start -->

  <div id="<?php echo $anchorSlug ?>" class="full-width-headline" <?php echo heroImageStyle($img, $imgPos, $imgBackColor); ?>>
    <div class="full-width">
      <div class="panel-info<?php echo $blackText1 ?>">
        <h1 class="large-head">
          <?php if($headerLink):?>
            <a href="<?php echo $headerLink ?>">
          <?php endif; ?>
            <?php echo $header; ?>
          <?php if($headerLink):?>
            </a>
          <?php endif; ?>
        </h1>
      <?php if($date):?>
        <h3><?php echo $date; ?></h3>
      <?php endif; ?>
      <?php if($desc):?>
        <p><?php echo $desc; ?></p>
      <?php endif; ?>
      <?php if($ctaLink):?>
        <button class="ticket-button">
          <a href="<?php echo $ctaLink ?>"><?php echo $ctaText; ?></a>
        </button>
      <?php endif; ?>
      </div>
    </div>

    <!-- Hero End -->

  </div>
</div>