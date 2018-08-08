<?php

$solo_anchor_header = get_sub_field('solo_anchor_content');

if( $solo_anchor_header ){?>



<div id="<?php echo $solo_anchor_header['anchor_slug'] ?>" class="full-width-area centered-text-module solo-anchor">

<div class="container text-center">



<?php if($solo_anchor_header['header_text']){ ?>
<h2>
<?php echo $solo_anchor_header['header_text']; ?>
</h2>
<div class="dash">-</div>
<?php } ?>

</div>
</div>





<?php } ?>








