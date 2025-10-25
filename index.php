<?php get_header(); ?>
<section class="container hero" style="padding-top:24px;">
  <div class="hero-copy">
    <h1>Empower a Child’s Future — Join Hands with Navjeevan Charitable Trust</h1>
    <p class="lead">Together we can ensure every child gets the joyful, empowering start they deserve.</p>
    <div style="margin-top:12px;">
      <a class="btn btn-blue" href="<?php echo esc_url(home_url('/donate')); ?>">Donate Now</a>
      <a class="btn btn-yellow" href="<?php echo esc_url(home_url('/donate')); ?>">Sponsor a Child</a>
    </div>
  </div>
  <div class="hero-media"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-hero.jpg" alt="Happy children" style="border-radius:12px" /></div>
</section>
<section class="container" style="padding:24px 0;">
  <h2 class="section-title">Our Initiatives</h2>
  <div class="cards">
    <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-event.jpg" alt="preschool"/><h3>Navjeevan Preschools</h3><p>Joyful learning centers in Panvel & Navi Mumbai.</p></div>
    <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-event.jpg" alt="educator"/><h3>Navjeevan Educator Programme</h3><p>Training for compassionate, child-centered teachers.</p></div>
    <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-event.jpg" alt="support"/><h3>Support for Municipal Schools</h3><p>Curriculum help, learning-aids & community outreach.</p></div>
    <div class="card"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-event.jpg" alt="sponsor"/><h3>Sponsor a Child</h3><p>Full-year sponsorships for underprivileged children.</p></div>
  </div>
</section>
<section class="container" style="padding:18px 0;">
  <h2 class="section-title">Gallery Highlights</h2>
  <div style="display:flex;gap:12px;flex-wrap:wrap;">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-event.jpg" style="width:48%;border-radius:8px"/>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-raigad.jpg" style="width:48%;border-radius:8px"/>
  </div>
</section>
<section class="container" style="padding:18px 0;">
  <h2 class="section-title">Welcome Video</h2>
  <div style="background:#eee;height:360px;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#666">Your Video Here (replace with embed)</div>
</section>
<?php get_footer(); ?>