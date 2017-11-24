<?php /*Template Name: standard */
get_header();?>
<h1><?php the_title();?></h1>
<?php while(have_posts()):the_post();?>

  <div><?php the_content() ?></div>
<?php endwhile;
get_footer();
