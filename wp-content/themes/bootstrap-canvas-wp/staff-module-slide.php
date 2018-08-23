
<?php

$staff_module = get_sub_field('staff_module');

if( get_row_layout() == 'staff_module' ):
   $anchorSlug = get_sub_field('anchor_slug'); 
 endif;


if( $staff_module ){?>
<section <?php if($anchorSlug):?>id="<?php echo $anchorSlug ?>" <?php endif; ?>class="staff-info">
<div class="container staff-groupings">

<?php

$arr = $staff_module;
$i = 0;
foreach ($arr as &$value) {?>


<div id="<?php echo $value['last_name']; ?>" class="staff-member" style="background: url(<?php echo str_replace(".jpg", "-683x1024.jpg", $value['image'] );  ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<img src="<?php echo $value['image']; ?>" style="display:none;">


<img src="<?php echo str_replace(".jpg", "-333x500.jpg", $value['image'] );  ?>" style="display:none;">

<div class="info"><h1 class="white staff-member-name gray-border">
<?php echo $value['first_name']; ?>&nbsp;<?php echo $value['last_name']; ?>
</h1>
<span class="top-text">
<?php echo $value['title']; ?>
</span>
<span class="employee-description"><p>
<?php echo $value['description']; ?>
</span></div></div>


<?php $i++; }?>

</div>
</section>










<?php } ?>


