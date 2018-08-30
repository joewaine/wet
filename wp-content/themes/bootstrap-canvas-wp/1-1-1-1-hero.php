<?php 

  $one_one_one_one_hero = get_sub_field('1_1_1_1_hero'); 
  if( !$one_one_one_one_hero ){
    return false;
  }

  $anchorSlug = $one_one_one_one_hero['anchor_slug'];
  $hide = $one_one_one_one_hero['hide'];

  // Hero 1
  $img1 = $one_one_one_one_hero['image'];
  $imgPos1 = $one_one_one_one_hero['image_position_1'];
  $imgBackColor1 = ($one_one_one_one_hero['image_background_color_1']) ? $one_one_one_one_hero['image_background_color_1'] : '';
  $header1 = $one_one_one_one_hero['header'];
  $headerLink1 = $one_one_one_one_hero['header_link'];
  $headerColor1 = $one_one_one_one_hero['header_color_1'];
  $date1 = $one_one_one_one_hero['date'];
  $desc1 = $one_one_one_one_hero['description'];
  $ctaLink1 = $one_one_one_one_hero['cta_link'];
  $ctaText1 = $one_one_one_one_hero['cta_text'];

  // Hero 2
  $img2 = $one_one_one_one_hero['image_2'];
  $imgPos2 = $one_one_one_one_hero['image_position_2'];
  $imgBackColor2 = ($one_one_one_one_hero['image_background_color_2']) ? $one_one_one_one_hero['image_background_color_2'] : '';
  $header2 = $one_one_one_one_hero['header_2'];
  $headerLink2 = $one_one_one_one_hero['header_link_2'];
  $headerColor2 = $one_one_one_one_hero['header_color_2'];
  $date2 = $one_one_one_one_hero['date_2'];
  $desc2 = $one_one_one_one_hero['description_2'];
  $ctaLink2 = $one_one_one_one_hero['cta_link_2'];
  $ctaText2 = $one_one_one_one_hero['cta_text_2'];

  // Hero 3
  $img3 = $one_one_one_one_hero['image_3'];
  $imgPos3 = $one_one_one_one_hero['image_position_3'];
  $imgBackColor3 = ($one_one_one_one_hero['image_background_color_3']) ? $one_one_one_one_hero['image_background_color_3'] : '';
  $header3 = $one_one_one_one_hero['header_3'];
  $headerLink3 = $one_one_one_one_hero['header_link_3'];
  $headerColor3 = $one_one_one_one_hero['header_color_3'];
  $date3 = $one_one_one_one_hero['date_3'];
  $desc3 = $one_one_one_one_hero['description_3'];
  $ctaLink3 = $one_one_one_one_hero['cta_link_3'];
  $ctaText3 = $one_one_one_one_hero['cta_text_3'];
  
  // Hero 4
  $img4 = $one_one_one_one_hero['image_4'];
  $imgPos4 = $one_one_one_one_hero['image_position_4'];
  $imgBackColor4 = ($one_one_one_one_hero['image_background_color_4']) ? $one_one_one_one_hero['image_background_color_4'] : '';
  $header4 = $one_one_one_one_hero['header_4'];
  $headerLink4 = $one_one_one_one_hero['header_link_4'];
  $headerColor4 = $one_one_one_one_hero['header_color_4'];
  $date4 = $one_one_one_one_hero['date_4'];
  $desc4 = $one_one_one_one_hero['description_4'];
  $ctaLink4 = $one_one_one_one_hero['cta_link_4'];
  $ctaText4 = $one_one_one_one_hero['cta_text_4'];
?>

<div class="one-one-one-one-mod container front-page-modules" <?php if($hide): ?>style="display:none;"<?php endif; ?>>
  <div class="four-quarters-headline">
  <!-- Hero 1 Start -->

    <div id="<?php echo $anchorSlug ?>" class="one-quarter" <?php echo heroImageStyle($img1, $imgPos1, $imgBackColor1); ?>>
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

    <div class="one-quarter" <?php echo heroImageStyle($img2, $imgPos2, $imgBackColor2); ?>>
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

  <!-- Hero 2 End, Hero 3 Start -->

    <div class="one-quarter" <?php echo heroImageStyle($img3, $imgPos3, $imgBackColor3); ?>>
      <div class="panel-info">
      <h1 style="color: <?php echo $headerColor3; ?>">
        <?php if($headerLink3):?>
          <a href="<?php echo $headerLink3 ?>" style="color: <?php echo $headerColor3; ?>">
        <?php endif; ?>
          <?php echo $header3; ?>
        <?php if($headerLink3):?>
          </a>
        <?php endif; ?>
      </h1>
      <?php if($date3):?>
        <h3><?php echo $date3; ?></h3>
      <?php endif; ?>
      <?php if($desc3):?>
        <p><?php echo $desc3; ?></p>
      <?php endif; ?>
      <?php if($ctaLink3): ?>
        <button class="ticket-button">
          <a href="<?php echo $ctaLink3 ?>"><?php echo $ctaText3; ?></a>
        </button>
      <?php endif; ?>
      </div>
    </div>

  <!-- Hero 3 End, Hero 4 Start -->

    <div class="one-quarter" <?php echo heroImageStyle($img4, $imgPos4, $imgBackColor4); ?>>
      <div class="panel-info">
      <h1 style="color: <?php echo $headerColor4; ?>">
        <?php if($headerLink4):?>
          <a href="<?php echo $headerLink4 ?>" style="color: <?php echo $headerColor4; ?>">
        <?php endif; ?>
          <?php echo $header4; ?>
        <?php if($headerLink4):?>
          </a>
        <?php endif; ?>
      </h1>
      <?php if($date4):?>
        <h3><?php echo $date4; ?></h3>
      <?php endif; ?>
      <?php if($desc4):?>
        <p><?php echo $desc4; ?></p>
      <?php endif; ?>
      <?php if($ctaLink4): ?>
        <button class="ticket-button">
          <a href="<?php echo $ctaLink4 ?>"><?php echo $ctaText4; ?></a>
        </button>
      <?php endif; ?>
      </div>
    </div>

  <!-- Hero 4 End -->

  </div>
</div>
