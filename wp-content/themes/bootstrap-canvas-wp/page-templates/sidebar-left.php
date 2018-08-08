<?php
/*
Template Name: Sidebar Left
*/
?><?php get_header(); ?>

    <div class="row">

        <?php if ( is_rtl() ) : ?>
        <div class="col-sm-12 blog-main-left">
        <?php else : ?>
        <div class="col-sm-12 blog-main-right">
        <?php endif; ?>



        </div><!-- /.blog-main -->



      </div><!-- /.row -->

	<?php get_footer(); ?>