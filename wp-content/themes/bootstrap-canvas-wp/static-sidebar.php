<?php 
  $showContactForm = (get_fields()['show_contact_form']) ? get_fields()['show_contact_form'] : false; 
?>

<div class="col-sm-4 static-sidebar">

<?php if($showContactForm != false): ?>
  <div class="sidebar-contact-form">
  	<hr class="mobile-only"/>
  	<h4>Contact Us</h4>
  	<?php echo do_shortcode( '[contact-form-7 id="2668" title="Contact Us"]' ); ?>
  </div>
<?php endif; ?>

  <div class="right-column-contact">
    <h4>Keep up with the ensemble</h4>
    <button>
  	  <a target="_blank" href="<?php the_field('mailing_list_link', 'option'); ?>">join our mailing list</a>
    </button>
    <h4>social media</h4>
    <?php if( have_rows('social_links', 'option') ): ?>
      <ul class="social-links right-bar">
        <?php while( have_rows('social_links', 'option') ): the_row(); ?>
          <?php include 'social-repeater-logic.php' ?>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</div>