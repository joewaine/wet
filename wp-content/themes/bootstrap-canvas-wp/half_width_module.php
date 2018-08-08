<?php

// vars
$half_width_module = get_sub_field('half_width_content');

if( $half_width_module ){

?>


<div id="<?php echo $half_width_module['anchor_slug'] ?>" class="full-width-area no-pad half-width-content">
<div class="half-width-area bg-image" style="background-image: url(<?php echo $half_width_module['half_image'] ?>); background-color: white">
    <span class="space">image</span>
</div>

<div class="half-width-area bg-white">
<div class="pad-section">
<!-- <div class="col-sm-6 halves"> -->
  <!-- <div class="half-text-left"> -->
<h2>
<?php echo $half_width_module['header_text'] ?>
</h2>
<?php if($half_width_module['subheader']) {?>
<div class="dash">-</div>
<p>
<?php echo $half_width_module['subheader'] ?>
</p>
<?php } ?>


<?php

$arr = $half_width_module['button_repeater'];

$i = 0;
foreach ($arr as &$value) {?>
<button class="cta-button <?php echo $value['button']['button_color']; ?>">
<a href="<?php echo $value['button']['link']; ?>">
  <?php echo $value['button']['text']; ?>
</a>
</button>


<?php $i++; }?>





<!-- </div> -->
</div>

</div>


</div>


</div>



<?php

} ?>


