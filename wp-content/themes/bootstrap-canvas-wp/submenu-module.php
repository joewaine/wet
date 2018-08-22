<?php
// vars
$submenu = get_sub_field('anchor_repeater');
if( $submenu ){
?>

<div class="submenu full-width black">
  <ul class="id-nav">

    <?php foreach ($submenu as &$value) {?>

      <li class="scroll-anchor" data="#<?php echo $value['slug_text']; ?>">
        <?php echo $value['text']; ?>
      </li>

    <?php  }?>

  </ul>
</div>

<?php
}?>