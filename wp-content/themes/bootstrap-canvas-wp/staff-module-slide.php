<?php
	
  $staff_module = get_sub_field('staff_module');

  if( !$staff_module ) {
      return false;
  }

  $anchorSlug = get_sub_field('anchor_slug');

?>

<section <?php if($anchorSlug):?>id="<?php echo $anchorSlug ?>" <?php endif; ?>class="staff-info">
	<div class="container staff-groupings">

	  <?php foreach ($staff_module as $member): ?>

	  	<?php

	  		$firstName = $member['first_name'];
	  		$lastName = $member['last_name'];
	  		$image = $member['image'];
	  		$imageMed = $image['sizes']['medium'];
	  		$imageLarge = $image['sizes']['large'];
	  		$title = $member['title'];
	  		$desc = $member['description'];

	  	?>

		<div id="<?php echo $lastName; ?>" class="staff-member" <?php echo heroImageStyle($imageLarge); ?>>
			<img src="<?php echo $imageLarge; ?>" style="display:none;"/>
			<div class="info">
				<h1 class="white staff-member-name gray-border"><?php echo $firstName; ?>&nbsp;<?php echo $lastName; ?></h1>
				<span class="top-text"><?php echo $title; ?></span>
				<span class="employee-description">
					<p><?php echo $desc; ?></p>
				</span>
			</div>
		</div>

	  <?php endforeach;?>

	</div>
</section>
