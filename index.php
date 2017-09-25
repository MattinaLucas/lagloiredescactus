<?php get_header();?>

<h2>Hello world</h2>
<h3>Coucou</h3>

<?php if(have_posts()):while(have_posts()):
  the_post();?>
  <h2><?php the_title();?></h2>
  <p><?php the_content();?></p>
<?php endwhile; endif;?>

<?php get_footer();?>
