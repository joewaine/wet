<div class="col-sm-3">

<?php $menu_items = get_sub_field('menu_item');

if( $menu_items ){ ?>


<ul>

<li><?php echo $menu_items['title'] ?></li>

<?php
$arr = $menu_items['sub_menu'];

foreach ($arr as &$value) {?>
<li>
<a href="<?php echo $value['link']; ?>">
  <?php echo $value['text']; ?>
</a>
</li>


<?php  }?>

</ul>


<?php }?>
</div>