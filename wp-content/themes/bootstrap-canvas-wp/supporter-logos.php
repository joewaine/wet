<?php

$supporter_logo_repeater = get_sub_field('supporter_logo_repeater');

if( $supporter_logo_repeater ){?>


<div class="full-width-area centered-text-module solo-anchor ">

<div class="container text-center supporter-logos">
<?php $arr = $supporter_logo_repeater;
foreach ($arr as &$value) {?>
<div class="col-sm-4 col-xs-6">
        <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>">
</div><?php }?>
</div>
</div>





<?php } ?>








