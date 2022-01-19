
<?php
/**
 * Template Name: Pagina- muestra las noticias
 */

 use Roots\Sage\Titles;
?>



<?php while (have_posts()) : the_post(); ?>
  <div class="hero">
    <?php the_post_thumbnail('',['class' => 'img-fluid hero_image']); ?>
    <div class="container hero_title">
        <div class="d-flex justify-content-center"><h1 class="flex"><?php echo Titles\title(); ?></h1></div>
        <div class="d-flex justify-content-center"><h3 class="flex"><?php echo Titles\subtitle(); ?></h3></div>
        
    </div>
  </div>
  <div class="container mt-5">
    <div class=row>
        <div class="col">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>   
    </div>
  </div>
<?php endwhile; ?>

<?php get_template_part("partials/banner-noticia-noticias"); ?> 
  
<?php get_template_part("partials/banner-con-boton-info-transito"); ?>

<?php get_template_part("partials/noticias"); ?>





