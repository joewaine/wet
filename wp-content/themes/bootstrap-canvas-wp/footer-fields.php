

<footer class="site-footer">


<div class="container">
<div class="row">
<div class="col-sm-4">
<?php if( have_rows('bottom_left_footer_info_line_repeater', 'option') ): ?>
    <?php while( have_rows('bottom_left_footer_info_line_repeater', 'option') ): the_row(); ?>
      <?php include 'bottom_left_footer_info_line_repeater.php' ?>
    <?php endwhile; ?>
<?php endif; ?>

</div>

<div class="col-sm-8">

      <ul id="primary-menu" class="nav-menu">
  <?php
          wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class'     => 'primary-menu',
      'container'      => 'false',
      'items_wrap'     => '%3$s',
      'fallback_cb'    => 'bootstrap_canvas_wp_menu_fallback',
    ) );
  ?>


  </ul>
<br />






<?php if( have_rows('social_links', 'option') ): ?>
<ul class="social-links">
    <?php while( have_rows('social_links', 'option') ): the_row(); ?>
      <?php include 'social-repeater-logic.php' ?>
    <?php endwhile; ?>
</ul>
<?php endif; ?>




















</div>
</div>




<hr />

Generously supported by:
<br/>




<?php if( have_rows('supporter_links_and_images', 'option') ): ?>
<div class="supporter-links">
    <?php while( have_rows('supporter_links_and_images', 'option') ): the_row(); ?>
      <?php include 'supporter-repeater-logic.php' ?>
    <?php endwhile; ?>
</div>
<?php endif; ?>


<?php if( have_rows('footer_nav', 'option') ): ?>
    <?php while( have_rows('footer_nav', 'option') ): the_row(); ?>
      <?php include 'menu-repeater-logic.php' ?>
    <?php endwhile; ?>
<?php endif; ?>






<?php include 'cta-button.php' ?>




<?php if( get_field('copyright_field', 'option') ): ?>

 <br> <br>
  <div class="text-center">
  <span><?php the_field('copyright_field', 'option'); ?>
</span>
</div>
<br>
<br>
<br>

<?php endif; ?>


</div>








</footer>

