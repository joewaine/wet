
<?php
$content = get_sub_field('content');

?>

<?php if($content){?>

<section class="basic-page-content">
<div class="container">
<div class="col-sm-8">
<?php the_sub_field('content'); ?>
<div id="accordion">
  <h3>Sectifucon 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
</div>

<div class="col-sm-4">
  <h4>Keep up with the ensemble</h4>
  <button><a href="">join our mailing list</a></button>
  <h4>social media</h4>
<ul class="social-links">
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>
  <li><img src="http://localhost:8888/wp-content/themes/bootstrap-canvas-wp/img/logo.jpg" alt=""></li>

</ul>

    </div>


</div>
</section>
<?php } ?>