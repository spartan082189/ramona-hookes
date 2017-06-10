<!-- Sticky nav -->
<header uk-sticky="animation: uk-animation-slide-top; top: 150; bottom: #footer" id="sticky-menu">
  <div class="uk-container uk-container-large">
    <!-- Sticky Header -->
    <div class="uk-visible@l sticky" uk-grid>
      <div class="uk-width-1-1">
        <?php if( is_front_page() ) : ?>
        <ul class="uk-list uk-text-center" uk-scrollspy-nav="closest: li > a; scroll: true">       
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>' class="uk-display-block" uk-scroll><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>/vision-mission' class="uk-display-block" uk-scroll><i class="fa fa-bullseye" aria-hidden="true"></i><span>Vision and Mission</span></a></li>
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>' class="uk-display-block" uk-scroll><i class="fa fa-folder" aria-hidden="true"></i><span>Goals and Current Projects</span></a></li>
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>/blog' class="uk-display-block" uk-scroll><i class="fa fa-feed" aria-hidden="true"></i><span>Blog</span></a></li>
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>' class="uk-display-block" uk-scroll><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact</span></a></li>
        </ul>
        <?php elseif ( is_page('Blog') ): ?>
        <ul class="uk-list uk-text-left" uk-scrollspy-nav="closest: li > a; scroll: true">
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-home" aria-hidden="true"></i><span>Back Home</span></a></li>
        </ul>
        <?php else: ?>
        <ul class="uk-list uk-text-left" uk-scrollspy-nav="closest: li > a; scroll: true">
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-home" aria-hidden="true"></i><span>Back Home</span></a></li>
          <li class="uk-display-inline-block uk-padding-small"><a href='<?php echo site_url(); ?>/blog' class="uk-display-block"><i class="fa fa-comments" aria-hidden="true"></i><span>All Blog Posts</span></a></li>
        </ul>
        <?php endif; ?>
      </div>
    </div>
    <!-- Standard Header -->
    <div class="uk-width-1-1 non-sticky">
      <div uk-grid class="uk-grid-collapse">
        <div class="uk-width-1-1">
          <a href="javascript:void(0);" class="toggle-menu-btn uk-display-inline-block" uk-toggle="target: #offcanvas-push"><i class="fa fa-bars fa-2x"></i></a>
        </div>
      </div>
    </div>
  </div>
</header>