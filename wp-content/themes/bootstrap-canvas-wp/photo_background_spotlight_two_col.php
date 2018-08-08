<?php

// vars
$photo_background_spotlight_lr = get_sub_field('photo_background_spotlight_two_column_content');

if( $photo_background_spotlight_lr ){

?>


<?php if($photo_background_spotlight_lr['centered_optional_header']){ ?>







<div class="full-width-area centered-text-module staff-module">
<div class="container text-center">
<p class="centered-optional-header">
<?php echo $photo_background_spotlight_lr['centered_optional_header']; ?>
</p>
</div></div>

<?php } ?>




<div id="<?php echo $photo_background_spotlight_lr['anchor_slug'] ?>" class="full-width-area centered-text-module spotlight" style="background-image: url(<?php echo $photo_background_spotlight_lr['photo_background'] ?>)">


<div class="container sm-two-col-container">


<div class="col-sm-6">

<div class="container text-center spotlight-cube sm-two-col">
<?php if($photo_background_spotlight_lr['icon_left']){ ?>
<img src="<?php echo $photo_background_spotlight_lr['icon_left']; ?>" alt="<?php echo $photo_background_spotlight_lr['icon_left']; ?>">
<?php } ?>
<?php if($photo_background_spotlight_lr['header_text_left']){ ?>
<h2>
<?php echo $photo_background_spotlight_lr['header_text_left']; ?>
</h2>
<?php } ?>
<?php if($photo_background_spotlight_lr['subheader_left']) {?>
<p class="smaller-subheader">
<?php echo $photo_background_spotlight_lr['subheader_left'] ?>
</p>
<?php } ?>
</div>

</div>



<div class="col-sm-6">

<div class="container text-center spotlight-cube sm-two-col">
<?php if($photo_background_spotlight_lr['icon_right']){ ?>
<img src="<?php echo $photo_background_spotlight_lr['icon_right']; ?>" alt="<?php echo $photo_background_spotlight_lr['icon_right']; ?>">
<?php } ?>
<?php if($photo_background_spotlight_lr['header_text_right']){ ?>
<h2>
<?php echo $photo_background_spotlight_lr['header_text_right']; ?>
</h2>
<?php } ?>
<?php if($photo_background_spotlight_lr['subheader_right']) {?>
<p class="smaller-subheader">
<?php echo $photo_background_spotlight_lr['subheader_right'] ?>
</p>
<?php } ?>
</div>

</div>

</div>




</div>
<?php } ?>
