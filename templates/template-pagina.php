<?php
/**
 * Template Name: Pagina-ultimas noticias-info transito 
 */

 use Roots\Sage\Titles;
?>



<?php while (have_posts()) : the_post(); ?>
  <div class="hero">
    <?php the_post_thumbnail('',['class' => 'img-fluid hero_image']); ?>
    <div class="container hero_title">
        <div class="d-flex justify-content-center"><h1 class="flex"><?php echo Titles\title(); ?></title></h1></div>
        <div class="d-flex justify-content-center"><h3 class="flex"><?php echo Titles\subtitle(); ?></title></h3></div>
        
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


<?php get_template_part("partials/ultimas_noticias_horizontal"); ?>


<?php get_template_part("partials/banner-con-boton-info-transito"); ?>