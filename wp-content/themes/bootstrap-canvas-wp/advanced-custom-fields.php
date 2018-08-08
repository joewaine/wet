<?php

// check if the flexible content field has rows of data
if( have_rows('modules') ){

     // loop through the rows of data
    while ( have_rows('modules') ) : the_row();

if( get_row_layout() == 'header' ){
  include 'header-module.php';
}elseif( get_row_layout() == 'centered_text_module'){
  include 'centered_text_module.php';
}elseif( get_row_layout() == 'full_width_hero'){
  include 'full-width-hero.php';
}elseif( get_row_layout() == 'staff_module_slide'){
  include 'staff-module-slide.php';
}elseif( get_row_layout() == 'basic_page_content'){
  include 'basic-page-content.php';
}endwhile;
 } ?>






