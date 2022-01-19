<?php
/**
 * Template Name: Pagina-Tramites
 */

 use Roots\Sage\Titles;
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="hero">
    <?php the_post_thumbnail('',['class' => 'img-fluid hero_image']); ?>
    <div class="container hero_title">
        <div class="d-flex justify-content-center"><h4 style="text-align:center"><?php echo Titles\subtitle(); ?></h4></div>
        <div class="d-flex justify-content-center"><h1 style="text-align:center"><?php echo Titles\title(); ?></h1></div>
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

<?php get_template_part("partials/banner-con-boton-info-transito"); ?>