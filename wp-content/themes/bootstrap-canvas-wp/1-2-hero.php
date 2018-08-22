<?php $one_two_hero = get_sub_field('1_2_hero'); ?>

<?php if( $one_two_hero ){ ?>


<?php if($one_two_hero['hide']){?>

<div class="container front-page-modules" style="display:none;">

<?php }else{ ?>
<div class="container front-page-modules">
<?php } ?>


  <div id="<?php echo $one_two_hero['anchor_slug'] ?>" class="one-third" style="background: url(<?php echo $one_two_hero['image'] ?>) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; background-position: 50% 50%;">
<div class="panel-info <?php if($one_two_hero['black_text']){ ?>black-text<?php } ?>">
<?php if($one_two_hero['header_link']){?>
  <h1>
  <a href="<?php echo $one_two_hero['header_link'] ?>"><?php echo $one_two_hero['header']; ?></a>
  </h1>
<?php }else{ ?>
  <h1>
      <?php echo $one_two_hero['header']; ?>
  </h1>

<?php } ?>

<?php if($one_two_hero['date']){?>
  <h3>
    <?php echo $one_two_hero['date']; ?>
  </h3>
<?php } ?>


<?php if($one_two_hero['description']){?>
<p>
  <?php echo $one_two_hero['description']; ?>
</p>
<?php } ?>

<?php if($one_two_hero['cta_link']){?>

<button class="ticket-button">
  <a href="<?php echo $one_two_hero['cta_link'] ?>">
<?php echo $one_two_hero['cta_text']; ?>
  </a>
</button>

<?php } ?>




</div>
  </div>



  <div class="two-third" style="background: url(<?php echo $one_two_hero['image_2'] ?>) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; background-position: 50% 50%;">
<div class="panel-info <?php if($one_two_hero['black_text_2']){ ?>black-text<?php } ?>">

<?php if($one_two_hero['header_link_2']){?>
  <h1>
  <a href="<?php echo $one_two_hero['header_link_2'] ?>"><?php echo $one_two_hero['header_2']; ?></a>
  </h1>
<?php }else{ ?>
  <h1>
      <?php echo $one_two_hero['header_2']; ?>
  </h1>

<?php } ?>

<?php if($one_two_hero['date_2']){?>
  <h3>
    <?php echo $one_two_hero['date_2']; ?>
  </h3>
<?php } ?>


<?php if($one_two_hero['description_2']){?>
<p>
  <?php echo $one_two_hero['description_2']; ?>
</p>
<?php } ?>

<?php if($one_two_hero['cta_link_2']){?>

<button class="ticket-button">
  <a href="<?php echo $one_two_hero['cta_link_2'] ?>">
<?php echo $one_two_hero['cta_text_2']; ?>
  </a>
</button>

<?php } ?>

</div></div>







</div>
<?php } ?>






















