

<footer class="site-footer">


<div class="container">
<div class="row">
<div class="col-sm-4">

Washington Ensemble Theatre<br/>
PO Box 20834<br/>
Seattle, WA 98102-1834<br/>
(206) 325-5105<br/>
washingtonensemble.org<br/>
info@washingtonensemble.org
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



<ul class="social-links">
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>

</ul>


</div>
</div>




<hr />

Generously supported by:
<br/>

<ul class="supporter-links">
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>

</ul>
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

