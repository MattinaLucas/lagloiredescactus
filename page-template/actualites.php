<?php /* Template name: Actualités */ get_header();
$args=array('post_type'=>'post');
$query=new WP_Query($args);
    if($query->have_posts()
    while($query->have_posts()
    $query->the_post();
?>

<h2>Hello world</h2>
<h3>Coucou</h3>

<?php if(have_posts()):while(have_posts()):
  the_post();?>
  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  <p><?php the_content();?></p>
  <small><p>Posté le <?php the_time('j F Y à H\hi'); ?> par <?php the_author_posts_link(); ?>.</p></small>
  <?php comments_number('Il n\'y a aucun commentaire','Il y a un commentaire','Il y a % commentaires');?>

<?php endwhile; endif;?>

<?php get_footer();?>
