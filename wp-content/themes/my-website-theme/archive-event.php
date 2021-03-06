<?php
  get_header(  );
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">A Static One</h1>
    <div class="page-banner__intro">
      <p>Learn how the school of your dreams got started.</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">

<?php
  while (have_posts()):
    the_post();
    $event_date = new DateTime(get_field('event_date'));
    ?>
    <div class="event-summary">
      <a class="event-summary__date t-center" href="<?php the_permalink( $post ); ?>">
        <span class="event-summary__month"><?php echo $event_date->format('M'); ?></span>
        <span class="event-summary__day"><?php echo $event_date->format('d'); ?></span>
      </a>
      <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink( $post ); ?>"><?php the_title(  ); ?></a></h5>
        <p><?php echo wp_trim_words( get_the_content(  ), $num_words = 18); ?> <a href="<?php the_permalink( $post ); ?>" class="nu gray">Learn more</a></p>
      </div>
    </div>
    <?php
  endwhile;
  wp_reset_postdata();
  echo paginate_links( );
  ?>
</div>
<?php
  get_footer(  );
?>
