<?php

// vars
$centered_text_module = get_sub_field('centered_text_content');

if( $centered_text_module ){

?>



<div id="<?php echo $centered_text_module['anchor_slug'] ?>" class="full-width-area centered-text-module">

<div class="container text-center">



<?php if($centered_text_module['header_text']){ ?>
<h2>
<?php echo $centered_text_module['header_text']; ?>
</h2>
<div class="dash">-</div>
<?php } ?>





<?php if($centered_text_module['secondary_header_text']){ ?>

<h3 class="second-header">
<?php echo $centered_text_module['secondary_header_text']; ?>
</h3>
<div class="dash">-</div>
<?php } ?>


<?php if($centered_text_module['subheader']) {?>



<?php if($centered_text_module['image']){?>
<img class="full-width-text-image" src="<?php echo $centered_text_module['image'] ?>" alt="<?php echo $centered_text_module['image'] ?>">
<?php } ?>

<?php if($centered_text_module['center_true_false']){?>
<p class="centered">
<?php }else{?>
<p>
<?php } ?>




<?php echo $centered_text_module['subheader'] ?>
</p>
<?php } ?>



<div class="two-col-text">
<?php if($centered_text_module['two_col_left_text']){?>
<div class="col-sm-6 no-pad-lr">
<p>
<?php echo $centered_text_module['two_col_left_text'] ?>
</p></div>
<?php } ?>

<?php if($centered_text_module['two_col_right_text']){?>
<div class="col-sm-6 no-pad-lr">
<p>
<?php echo $centered_text_module['two_col_right_text'] ?>
</p></div>
<?php } ?>


</div>

<?php if($centered_text_module['smaller_text']) {?>
<?php if($centered_text_module['center_true_false']){?>
<p class="smaller-subheader centered">
<?php }else{?>
<p class="smaller-subheader">
<?php } ?>






<?php echo $centered_text_module['smaller_text'] ?>
</p>
<?php } ?>



<?php

$arr = $centered_text_module['button_repeater'];

$i = 0;
foreach ($arr as &$value) {?>
<button class="cta-button <?php echo $value['button']['button_color']; ?>">
<a href="<?php echo $value['button']['link']; ?>">
  <?php echo $value['button']['text']; ?>
</a>
</button>


<?php $i++; }?>









</div>

</div>

</div>



<?php

} ?>

