<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

	<?php
	  /*
	   * We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head();
    ?>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      active: false,
      collapsible: true
    });
  } );
  </script>


  </head>
  <body <?php body_class(); ?>>



    <div class="staff-modal">
      <div class="content">
        <div class="clearfix">
          <div style="float: left;" class="clearfix left-mod-col">
            <img src="" alt="">
          </div>
          <!-- No Clearing div! -->
          <div class="right-mod-col">
            <h2>
              <span class="first-name"></span>&nbsp;
              <span class="last-name"></span>
            </h2>
            <p class="description"></p>
          </div>
        </div>
      </div>
    </div>
    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
      <div class="container">
        <a class="logo-link" href="<?php echo get_home_url() ?>">
          <img class="wet-logo" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Washington Ensemble Theatre">
        </a>
        <a class="menu-toggle" href="javascript:void(0);" onclick="toggleResponsive()">&#9776;</a>
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
          <li>
            <button class="cta-button magenta btn btn-default donate-button">
              <a target="_blank" href="<?php the_field('ticketing_link', 'option'); ?>">tickets</a>
            </button>
          </li>
        </ul>
      </div>
    </nav><!-- #site-navigation -->
<?php include 'advanced-custom-fields.php'; ?>









