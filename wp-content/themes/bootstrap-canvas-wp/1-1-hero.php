<?php

  $two_half_hero = get_sub_field('1_1_hero');

  if( !$two_half_hero ) {
      return false;
  }

  $anchorSlug = $two_half_hero['anchor_slug'];
  $hide = $two_half_hero['hide'];

  // Hero 1
  $img1 = $two_half_hero['image'];
  $imgPos1 = $two_half_hero['image_position'];
  $imgBackColor1 = ($two_half_hero['image_background_color_1']) ? $two_half_hero['image_background_color_1'] : '';
  $blackText1 = ($two_half_hero['black_text']) ? ' black-text' : '';
  $headerLink1 = $two_half_hero['header_link'];
  $header1 = $two_half_hero['header'];
  $date1 = $two_half_hero['date'];
  $desc1 = $two_half_hero['description'];
  $ctaLink1 = $two_half_hero['cta_link'];
  $ctaText1 = $two_half_hero['cta_text'];

  // Hero 2
  $img2 = $two_half_hero['image_2'];
  $imgPos2 = $two_half_hero['image_position_2'];
  $imgBackColor2 = ($two_half_hero['image_background_color_2']) ? $two_half_hero['image_background_color_2'] : '';
  $blackText2 = ($two_half_hero['black_text_2']) ? ' black-text' : '';
  $headerLink2 = $two_half_hero['header_link_2'];
  $header2 = $two_half_hero['header_2'];
  $date2 = $two_half_hero['date_2'];
  $desc2 = $two_half_hero['description_2'];
  $ctaLink2 = $two_half_hero['cta_link_2'];
  $ctaText2 = $two_half_hero['cta_text_2'];

?>

<div class="one-one-mod container front-page-modules" <?php if($hide): ?>style="display:none;"<?php endif; ?>>
  <div class="two-half-headline">

  <!-- Hero 1 Start -->

    <div id="<?php echo $anchorSlug ?>" class="one-half" <?php echo heroImageStyle($img1, $imgPos1, $imgBackColor1); ?>>
      <div class="panel-info<?php echo $blackText1 ?>">
        <h1>
          <?php if($headerLink1):?>
            <a href="<?php echo $headerLink1 ?>">
          <?php endif; ?>
            <?php echo $header1; ?>
          <?php if($headerLink1):?>
            </a>
          <?php endif; ?>
        </h1>
      <?php if($date1):?>
        <h3><?php echo $date1; ?></h3>
      <?php endif; ?>
      <?php if($desc1):?>
        <p><?php echo $desc1; ?></p>
      <?php endif; ?>
      <?php if($ctaLink1): ?>
        <button class="ticket-button">
          <a href="<?php echo $ctaLink1 ?>"><?php echo $ctaText1; ?></a>
        </button>s
      <?php endif; ?>
      </div>
    </div>

  <!-- Hero 1 End, Hero 2 Start -->

    <div class="one-half" <?php echo heroImageStyle($img2, $imgPos2, $imgBackColor2); ?>>
      <div class="panel-info<?php echo $blackText2 ?>">
        <h1>
          <?php if($headerLink2):?>
            <a href="<?php echo $headerLink2 ?>">
          <?php endif; ?>
            <?php echo $header2; ?>
          <?php if($headerLink2):?>
            </a>
          <?php endif; ?>
        </h1>
      <?php if($date2):?>
        <h3><?php echo $date2; ?></h3>
      <?php endif; ?>
      <?php if($desc2):?>
        <p><?php echo $desc2; ?></p>
      <?php endif; ?>
      <?php if($ctaLink2): ?>
        <button class="ticket-button">
          <a href="<?php echo $ctaLink2 ?>"><?php echo $ctaText2; ?></a>
        </button>
      <?php endif; ?>
      </div>
    </div>

  <!-- Hero 2 End -->

  </div>
</div>
