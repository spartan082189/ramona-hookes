<!-- ########## OFF CANVAS NAV MENU ########## -->
<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
  <div id="nav" class="uk-offcanvas-bar">
    <div>
      <img class="uk-responsive-width author-img-menu" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/author.jpg" alt="Author" />
    </div>
    <nav>
      <ul class="uk-list">
        <?php if ( is_front_page () ) : ?>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-bullseye" aria-hidden="true"></i><span>Vision and Mission</span></a></li>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-folder" aria-hidden="true"></i><span>Goals and Current Projects</span></a></li>
          <li><a href='<?php echo site_url(); ?>/blog' class="uk-display-block"><i class="fa fa-feed" aria-hidden="true"></i><span>Blog</span></a></li>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact</span></a></li>
        <?php else : ?>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-bullseye" aria-hidden="true"></i><span>Vision and Mission</span></a></li>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-folder" aria-hidden="true"></i><span>Goals and Current Projects</span></a></li>
          <li><a href='<?php echo site_url(); ?>/blog' class="uk-display-block"><i class="fa fa-feed" aria-hidden="true"></i><span>Blog</span></a></li>
          <li><a href='<?php echo site_url(); ?>' class="uk-display-block"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact</span></a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</div>