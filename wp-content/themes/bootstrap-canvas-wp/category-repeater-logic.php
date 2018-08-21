
<?php $cat_sidebar = get_sub_field('category_groups');

if( $cat_sidebar ){ ?>

<ul class="cat-list">
<li><?php echo $cat_sidebar['title'] ?></li>
<?php
$arr = $cat_sidebar['category_repeater'];
foreach ($arr as &$value) {?>
<li>
<a href="<?php echo $value['slug']; ?>">
  <?php echo $value['title']; ?>
</a>
</li>
<?php  }?>
</ul>
<?php }?>