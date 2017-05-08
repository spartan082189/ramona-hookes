<!-- ########## HERO/HOME ########## -->
<section id="hero" uk-height-viewport>
  <?php get_template_part('templates/globals/navigation'); ?>
    <div class="uk-container uk-text-center content">
      <div class="uk-width-1-1">
        <a class="uk-width-1-2@m" herf="javascript:void(0);">
          <img class="uk-responsive-width" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-blue.png" alt="Logo" />
        </a>
        <a class="uk-width-1-2@m" herf="javascript:void(0);">
          <img class="uk-responsive-width" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-purple.png" alt="Logo" />
        </a>
      </div>
      <h1 uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: true">Dominion Restoration Ministries</h1>
      <h2 uk-scrollspy="cls:uk-animation-slide-top-small; delay: 300; repeat: true">Ramona Hookes Memorial Institute</h2>
      <h3 uk-scrollspy="cls:uk-animation-slide-top-small; delay: 500; repeat: true">The Birth of A New Ministry</h3>
      <ul class="uk-list social-links" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 500; repeat: true">
        <li class="uk-display-inline-block"><a href="javascript:void(0);"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li class="uk-display-inline-block"><a href="javascript:void(0);"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li class="uk-display-inline-block"><a href="javascript:void(0);"><i class="fa fa-feed fa-2x"></i></a></li>
      </ul>
      <div class="uk-textt-center uk-padding scroll-down" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 1100; repeat: true">
        <a href="#welcome" title="Scroll down" uk-scroll><i class="fa fa-chevron-down fa-2x"></i></a>
      </div>
    </div>
</section>
<!-- / #hero -->