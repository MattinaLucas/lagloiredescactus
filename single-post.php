<?php get_header();?>

<?php the_post();?>
  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  <p><?php the_excerpt();?></p>
  <small><p>Posté le <?php the_time('j F Y à H\hi'); ?> par <?php the_author_posts_link(); ?>.</p></small>

<?php if(comments_open() || get_comments_number()):comments_template(); endif;?>
<?php get_footer();?>
