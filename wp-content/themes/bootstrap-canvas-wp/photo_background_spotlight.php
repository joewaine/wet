<?php

// vars
$photo_background_spotlight = get_sub_field('photo_background_spotlight_content');

if( $photo_background_spotlight ){

?>

<div id="<?php echo $photo_background_spotlight['anchor_slug'] ?>" class="full-width-area centered-text-module spotlight" style="background-image: url(<?php echo $photo_background_spotlight['photo_background'] ?>)">
<div class="container text-center spotlight-cube">


<?php if($photo_background_spotlight['header_text']){ ?>
<h2>
<?php echo $photo_background_spotlight['header_text']; ?>
</h2>
<div class="dash">-</div>
<?php } ?>


<?php if($photo_background_spotlight['secondary_header_text']){ ?>

<h3 class="second-header">
<?php echo $photo_background_spotlight['secondary_header_text']; ?>
</h3>
<div class="dash">-</div>
<?php } ?>

<?php if($photo_background_spotlight['subheader']) {?>


<?php if($photo_background_spotlight['center_true_false']){?>
<p class="centered"><?php }else{?><p><?php } ?>
<?php echo $photo_background_spotlight['subheader'] ?></p><?php } ?>

<?php if($photo_background_spotlight['smaller_text']) {?>
<?php if($photo_background_spotlight['center_true_false']){?>
<p class="smaller-subheader centered">
<?php }else{?>
<p class="smaller-subheader">
<?php } ?>
<?php echo $photo_background_spotlight['smaller_text'] ?>
</p>
<?php } ?>


</div></div></div>
<?php } ?>
