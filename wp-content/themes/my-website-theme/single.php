<?php
  get_header(  );
?>

<?php
  while (have_posts()): the_post();
  // WordPress function that returns the number of posts
  // keeps track of which post we are working with and repalces the count variable
  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?> );"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"> <?php the_title() ?> </h1>
      <div class="page-banner__intro">
        <p> Don't forget to replace me later</p>
      </div>
    </div>
  </div>
  <?php
  endwhile
?>
<?php
  get_footer(  );
?>