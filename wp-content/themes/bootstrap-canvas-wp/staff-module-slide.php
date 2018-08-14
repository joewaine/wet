
<?php

$staff_module = get_sub_field('staff_module');

if( $staff_module ){?>
<section class="staff-info">
<div class="container staff-groupings">

<?php

$arr = $staff_module;
$i = 0;
foreach ($arr as &$value) {?>


<div id="<?php echo $value['last_name']; ?>" class="staff-member" style="background: url(<?php echo $value['image']; ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

<img src="<?php echo $value['image']; ?>" style="display:none;">



<div class="info"><h1 class="white staff-member-name gray-border">
<?php echo $value['first_name']; ?>&nbsp;<?php echo $value['last_name']; ?>
</h1><span class="employee-description"><p>
<?php echo $value['description']; ?>
</span></div></div>


<?php $i++; }?>

</div>
</section>










<?php } ?>


