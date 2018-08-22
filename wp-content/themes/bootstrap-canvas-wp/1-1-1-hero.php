

<?php $one_one_one_hero = get_sub_field('1_1_1_hero'); ?>

<?php if( $one_one_one_hero ){ ?>


<?php if($one_one_one_hero['hide']){?>

<div class="container front-page-modules" style="display:none;">

<?php }else{ ?>
<div class="container front-page-modules">
<?php } ?>

  <div id="<?php echo $one_one_one_hero['anchor_slug'] ?>" class="one-third" style="background: url(<?php echo $one_one_one_hero['image'] ?>) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; background-position: 50% 50%;">
<div class="panel-info <?php if($one_one_one_hero['black_text']){ ?>black-text<?php } ?>">
<?php if($one_one_one_hero['header_link']){?>
  <h1>
  <a href="<?php echo $one_one_one_hero['header_link'] ?>"><?php echo $one_one_one_hero['header']; ?></a>
  </h1>
<?php }else{ ?>
  <h1>
      <?php echo $one_one_one_hero['header']; ?>
  </h1>

<?php } ?>

<?php if($one_one_one_hero['date']){?>
  <h3>
    <?php echo $one_one_one_hero['date']; ?>
  </h3>
<?php } ?>


<?php if($one_one_one_hero['description']){?>
<p>
  <?php echo $one_one_one_hero['description']; ?>
</p>
<?php } ?>

<?php if($one_one_one_hero['cta_link']){?>

<button class="ticket-button">
  <a href="<?php echo $one_one_one_hero['cta_link'] ?>">
<?php echo $one_one_one_hero['cta_text']; ?>
  </a>
</button>

<?php } ?>




</div>
  </div>



  <div class="one-third" style="background: url(<?php echo $one_one_one_hero['image_2'] ?>) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; background-position: 50% 50%;">
<div class="panel-info <?php if($one_one_one_hero['black_text_2']){ ?>black-text<?php } ?>">
<?php if($one_one_one_hero['header_link_2']){?>
  <h1>
  <a href="<?php echo $one_one_one_hero['header_link_2'] ?>"><?php echo $one_one_one_hero['header_2']; ?></a>
  </h1>
<?php }else{ ?>
  <h1>
      <?php echo $one_one_one_hero['header_2']; ?>
  </h1>

<?php } ?>

<?php if($one_one_one_hero['date_2']){?>
  <h3>
    <?php echo $one_one_one_hero['date_2']; ?>
  </h3>
<?php } ?>


<?php if($one_one_one_hero['description_2']){?>
<p>
  <?php echo $one_one_one_hero['description_2']; ?>
</p>
<?php } ?>

<?php if($one_one_one_hero['cta_link_2']){?>

<button class="ticket-button">
  <a href="<?php echo $one_one_one_hero['cta_link_2'] ?>">
<?php echo $one_one_one_hero['cta_text_2']; ?>
  </a>
</button>
<?php } ?>
</div></div>







  <div class="one-third" style="background: url(<?php echo $one_one_one_hero['image_3'] ?>) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; background-position: 50% 50%;">
<div class="panel-info <?php if($one_one_one_hero['black_text_3']){ ?>black-text<?php } ?>">
<?php if($one_one_one_hero['header_link_3']){?>
  <h1>
  <a href="<?php echo $one_one_one_hero['header_link_3'] ?>"><?php echo $one_one_one_hero['header_3']; ?></a>
  </h1>
<?php }else{ ?>
  <h1>
      <?php echo $one_one_one_hero['header_3']; ?>
  </h1>

<?php } ?>

<?php if($one_one_one_hero['date_3']){?>
  <h3>
    <?php echo $one_one_one_hero['date_3']; ?>
  </h3>
<?php } ?>


<?php if($one_one_one_hero['description_3']){?>
<p>
  <?php echo $one_one_one_hero['description_3']; ?>
</p>
<?php } ?>

<?php if($one_one_one_hero['cta_link_3']){?>

<button class="ticket-button">
  <a href="<?php echo $one_one_one_hero['cta_link_3'] ?>">
<?php echo $one_one_one_hero['cta_text_3']; ?>
  </a>
</button>
<?php } ?>
</div></div>
























</div>
<?php } ?>

































































