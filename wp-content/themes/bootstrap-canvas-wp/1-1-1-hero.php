<?php 

  $one_one_one_hero = get_sub_field('1_1_1_hero'); 
  if( !$one_one_one_hero ){
    return false;
  }

  $anchorSlug = $one_one_one_hero['anchor_slug'];
  $hide = $one_one_one_hero['hide'];

  // Hero 1
  $img1 = $one_one_one_hero['image'];
  $imgPos1 = $one_one_one_hero['image_position_1'];
  $blackText1 = ($one_one_one_hero['black_text']) ? ' black-text' : '';
  $header1 = $one_one_one_hero['header'];
  $headerLink1 = $one_one_one_hero['header_link'];
  $headerColor1 = $one_one_one_hero['header_color_1'];
  $date1 = $one_one_one_hero['date'];
  $desc1 = $one_one_one_hero['description'];
  $ctaLink1 = $one_one_one_hero['cta_link'];
  $ctaText1 = $one_one_one_hero['cta_text'];

  // Hero 2
  $img2 = $one_one_one_hero['image_2'];
  $imgPos2 = $one_one_one_hero['image_position_2'];
  $blackText2 = ($one_one_one_hero['black_text_2']) ? ' black-text' : '';
  $header2 = $one_one_one_hero['header_2'];
  $headerLink2 = $one_one_one_hero['header_link_2'];
  $headerColor2 = $one_one_one_hero['header_color_2'];
  $date2 = $one_one_one_hero['date_2'];
  $desc2 = $one_one_one_hero['description_2'];
  $ctaLink2 = $one_one_one_hero['cta_link_2'];
  $ctaText2 = $one_one_one_hero['cta_text_2'];

  // Hero 3
  $img3 = $one_one_one_hero['image_3'];
  $imgPos3 = $one_one_one_hero['image_position_3'];
  $blackText3 = ($one_one_one_hero['black_text_3']) ? ' black-text' : '';
  $header2 = $one_one_one_hero['header_3'];
  $headerLink2 = $one_one_one_hero['header_link_3'];
  $headerColor2 = $one_one_one_hero['header_color_3'];
  $date3 = $one_one_one_hero['date_3'];
  $desc3 = $one_one_one_hero['description_3'];
  $ctaLink3 = $one_one_one_hero['cta_link_3'];
  $ctaText3 = $one_one_one_hero['cta_text_3'];
    
?>

<div class="one-one-one-mod container front-page-modules" <?php if($hide): ?>style="display:none;"<?php endif; ?>>

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

  <div class="one-third" <?php echo heroImageStyle($img2, $imgPos2, $imgBackColor2); ?>>
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

  <div class="one-third" <?php echo heroImageStyle($img3, $imgPos3, $imgBackColor3); ?>>
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

<!-- Hero 3 End -->

</div>

