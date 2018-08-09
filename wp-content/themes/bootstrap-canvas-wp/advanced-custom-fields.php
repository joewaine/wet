<?php

// check if the flexible content field has rows of data
if( have_rows('modules') ){

     // loop through the rows of data
    while ( have_rows('modules') ) : the_row();

if( get_row_layout() == 'full_width_hero'){
  include 'full-width-hero.php';
}elseif( get_row_layout() == '1_2_hero'){
  include '1-2-hero.php';
}elseif( get_row_layout() == '2_1_hero'){
  include '2-1-hero.php';
}elseif( get_row_layout() == '1_1_1_hero'){
  include '1-1-1-hero.php';
}elseif( get_row_layout() == '1_1_hero'){
  include '1-1-hero.php';
}elseif( get_row_layout() == '1_1_1_1_hero'){
  include '1-1-1-1-hero.php';
}elseif( get_row_layout() == 'staff_module_slide'){
  include 'staff-module-slide.php';
}elseif( get_row_layout() == 'basic_page_content'){
  include 'basic-page-content.php';
}elseif( get_row_layout() == 'blog_roll'){
    include 'blog-roll-logic.php';

}endwhile;
 } ?>






