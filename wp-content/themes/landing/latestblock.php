<div class="post-container">
  <div class="title-block">
    <h4>Service</h4>
    <h3>WHAT WE DO</h3>
    <hr class="slider-line">
  </div>
  <div class="post-block">
    <?php
    $args = array(
      'post_type' => 'team',
      'posts_per_page' => 3,
      'paged' => get_query_var( 'paged' ) ?: 1,
    );
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="post-cont">
          <div class="post-thumbnail">
            <div class="date">
              <span class="big"><?php echo date_i18n('j', strtotime(get_the_date())); ?></span><br>
              <span><?php echo date_i18n('F', strtotime(get_the_date())); ?></span><br>
            </div>
            <?php the_post_thumbnail('full'); ?>
          </div>
          <h5>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h5>
          <?php the_content(); ?>
          <hr class="latest-line">
          <div class="counters">
            <div class="counter-block">
              <div class="eye"></div>
              <span><?php echo pvc_get_post_views(get_the_ID()); ?></span>
            </div>
            <div class="counter-block">
              <div class="comments"></div>
              <span><?php echo get_comments_number(); ?></span>
            </div>

          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No team members found.'); ?></p>
    <?php endif; ?>
  </div>
  <div>
    <?php if ($the_query->found_posts > 3) {
	    echo '<a class="view-all" href="/team-archieve">View All</a>';
    }?>
  </div>
  <?php wp_reset_postdata(); ?>
</div>