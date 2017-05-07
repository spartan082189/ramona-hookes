<!-- ########## Latest Post ########## -->
<section id="latest-post" class="uk-section">
  <div class="uk-container uk-container-small">
    <div class="uk-width-1-1">
      <h2 class="uk-text-center"><i class="fa fa-feed"></i> Latest Post</h2>
      <div uk-grid class="uk-grid-large">
        <div class="uk-width-1-2@m">
          <img class="uk-responsive-width" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-purple.png" alt="Logo" />
        </div>
        <div class="uk-width-1-2@m">
          <article class="uk-article">
            <?php
              $args = array('numberposts' => 1, 'order' => 'DESC', 'orderby' => 'post_date');
              $postslist = get_posts($args);
              foreach ($postslist as $post) : setup_postdata($post);
            ?>
           <h5>
             <a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>" class="uk-article-title">
               <?php the_title(); ?>
             </a>
           </h5>
           <div class="date">
             <i class="fa fa-calendar" aria-hidden="true"></i>
             <?php echo get_the_date("F j, Y"); ?>
           </div>
           <?php endforeach; ?>
           </article>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /#latest-post -->