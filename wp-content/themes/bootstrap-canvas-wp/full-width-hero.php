

<?php

$full_width_hero = get_sub_field('full_width_hero');

 if( $full_width_hero ){
  ?>

<div class="container front-page-modules">
<div class="full-width-headline" style="background: url(<?php echo $full_width_hero['image'] ?>);">
  <div class="full-width">
<div class="panel-info">





<?php if($full_width_hero['header_link']){?>
  <h1 class="large-head">
  <a href="<?php echo $full_width_hero['header_link'] ?>"><?php echo $full_width_hero['header']; ?></a>
  </h1>
<?php }else{?>
  <h1 class="large-head">
      <?php echo $full_width_hero['header']; ?>
  </h1>

<?php } ?>

<?php if($full_width_hero['date']){?>
  <h3>
    <?php echo $full_width_hero['date']; ?>
  </h3>
<?php } ?>


<?php if($full_width_hero['description']){?>
<p>
  <?php echo $full_width_hero['description']; ?>
</p>
<?php } ?>

<?php if($full_width_hero['cta_link']){?>

<button class="ticket-button">
  <a href="<?php echo $full_width_hero['cta_link'] ?>">
<?php echo $full_width_hero['cta_text']; ?>
  </a>
</button>

<?php } ?>



      </div>
    </div>
  </div>
</div>







<?php } ?>










