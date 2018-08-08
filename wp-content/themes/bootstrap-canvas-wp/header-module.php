<?php

// vars
$header = get_sub_field('header_content');

if( $header ){

?>


<div class="full-width-area header" style="background-image: url(<?php echo $header['header_image'] ?>)">

<div class="container">


<div class="col-md-5 col-sm-12">
<h1>
<?php echo $header['header_text'] ?>
</h1>



<?php if($header['subheader']) {?>
<div class="dash">-</div>
<p>
<?php echo $header['subheader'] ?>
</p>
<?php } ?>



<?php

$arr = $header['button_repeater'];

foreach ($arr as &$value) {?>
<button class="cta-button <?php echo $value['button']['button_color']; ?>">
<a href="<?php echo $value['button']['link']; ?>">
  <?php echo $value['button']['text']; ?>
</a>
</button>


<?php }?>






</div>

</div>

</div>



<?php

$arr = $header['anchor_repeater'];
if($arr){
?>
<div class="full-width black">
  <div class="container">

    <ul class="id-nav">

<?php
foreach ($arr as &$value) {?>

<li class="scroll-anchor" data="#<?php echo $value['slug_text']; ?>">
  <?php echo $value['text']; ?>
</li>

<?php  }?>


    </ul>
  </div>
</div>



<?php
}
} ?>

