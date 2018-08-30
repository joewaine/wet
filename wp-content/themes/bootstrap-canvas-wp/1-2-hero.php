<?php

  $one_two_hero = get_sub_field('1_2_hero');

  if( !$one_two_hero ) {
      return false;
  }

  $anchorSlug = $one_two_hero['anchor_slug'];
  $hide = $one_two_hero['hide'];

  // Hero 1
  $img1 = $one_two_hero['image'];
  $imgPos1 = $one_two_hero['image_position_1'];
  $imgBackColor1 = ($one_two_hero['image_background_color_1']) ? $one_two_hero['image_background_color_1'] : '';
  $header1 = $one_two_hero['header'];
  $headerLink1 = $one_two_hero['header_link'];
  $headerColor1 = $one_two_hero['header_color_1'];
  $date1 = $one_two_hero['date'];
  $desc1 = $one_two_hero['description'];
  $ctaLink1 = $one_two_hero['cta_link'];
  $ctaText1 = $one_two_hero['cta_text'];

  // Hero 2
  $img2 = $one_two_hero['image_2'];
  $imgPos2 = $one_two_hero['image_position_2'];
  $imgBackColor2 = ($one_two_hero['image_background_color_2']) ? $one_two_hero['image_background_color_2'] : '';
  $header2 = $one_two_hero['header_2'];
  $headerLink2 = $one_two_hero['header_link_2'];
  $headerColor2 = $one_two_hero['header_color_2'];
  $date2 = $one_two_hero['date_2'];
  $desc2 = $one_two_hero['description_2'];
  $ctaLink2 = $one_two_hero['cta_link_2'];
  $ctaText2 = $one_two_hero['cta_text_2'];

?>

<div class="one-two-mod container front-page-modules" <?php if($hide): ?>style="display:none;"<?php endif; ?>>

<!-- Hero 1 Start -->

  <div id="<?php echo $anchorSlug ?>" class="one-third" <?php echo heroImageStyle($img1, $imgPos1, $imgBackColor1); ?>>
    <div class="panel-info">
      <h1 style="color: <?php echo $headerColor1; ?>">
        <?php if($headerLink1):?>
          <a href="<?php echo $headerLink1 ?>" style="color: <?php echo $headerColor1; ?>">
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
      </button>
    <?php endif; ?>
    </div>
  </div>

<!-- Hero 1 End, Hero 2 Start -->

  <div class="two-third" <?php echo heroImageStyle($img2, $imgPos2, $imgBackColor2); ?>>
    <div class="panel-info">
      <h1 style="color: <?php echo $headerColor2; ?>">
        <?php if($headerLink2):?>
          <a href="<?php echo $headerLink2 ?>" style="color: <?php echo $headerColor2; ?>">
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
