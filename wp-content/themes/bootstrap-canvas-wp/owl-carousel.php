<?php

$owl_carousel_repeater = get_sub_field('owl_carousel_repeater');

if( $owl_carousel_repeater ){?>

<div class="slideshow text-center">

<h2><?php the_sub_field('title') ?></h2>

<div class="dash">-</div>

        <div class="owl-carousel owl-theme">

<?php $arr = $owl_carousel_repeater;
foreach ($arr as &$value) {?>

      <div class="item">
                <h4>
                    <img src="<?php echo $value['slide']; ?>" alt="<?php echo $value['slide']; ?>">

                </h4>
            </div>



<?php }?>





        </div>


</div>


<?php } ?>








