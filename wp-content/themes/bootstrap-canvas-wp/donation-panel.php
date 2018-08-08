<div id="" class="full-width-area centered-text-module pb40">
<div class="container text-center">
<h2>
<?php the_sub_field('header_text')?>
</h2>
<div class="dash">-</div>
<p class="centered">
<?php the_sub_field('description_text')?>
</p>
<div class="two-col-text">
</div>
</div>
</div>
<div id="five" class="container text-center staff 3-per-row resources pt60 pb30">



<?php if( have_rows('donation_repeater') ):
    while ( have_rows('donation_repeater') ) : the_row(); ?>
<div class="staff-member donation-item">
  <div class="staff-panel resource-panel" data="<?php the_sub_field('amount'); ?>">
  <div class="first-name donation-amount">$<?php the_sub_field('amount'); ?></div>
  <p class="resource-description"><?php the_sub_field('description'); ?></p>
  </div>
  </div>
<?php endwhile; endif; ?>




<div class="staff-member donation-item">
  <div class="staff-panel resource-panel">
  <div class="first-name donation-amount">
    <input class="donation-input" type="text" placeholder="$" />
  </div>
  <p class="resource-description">here is the scrip here is the scrip here is the scrip</p>
  </div>
  </div>
<br><br>
<p class="centered donation-drop">

FREQUENCY

<select>
<!-- frequency repeater -->
<?php if( have_rows('frequency_repeater') ):
    while ( have_rows('frequency_repeater') ) : the_row(); ?>
    <option><?php the_sub_field('frequency'); ?></option>
<?php endwhile; endif; ?>
<!-- frequency repeater -->
</select>
</p>

<button class="cta-button blue btn btn-default no-right-margin">
<a href="/give">
  continue to paypal</a>
</button>
<br>
<br>
<!-- repeate -->
</div>