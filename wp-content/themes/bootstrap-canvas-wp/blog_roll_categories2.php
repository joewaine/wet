<?php $blog_roll = get_field('category_groups'); ?>


<pre>
  <?php
    print_r($blog_roll);
?>

</pre>

<?php if( $blog_roll ){ ?>




<?php $arr = $blog_roll;

?>

<?php
foreach($arr as &$value) {?>

  <?php
  echo $value['title'];
  echo '<br>';
  ?>

<?php $arr2 = $value['category_repeater']['categories']; ?>

<?php

echo '<ul>';

foreach($arr2 as &$value2) {?>

<?php


echo '<li><a href="/category/'. $value2['slug'] .'">' . $value2['title'] . '</a></li>';

?>

<?php }

echo '</ul>';

 ?>





<?php } ?>

<?php } ?>