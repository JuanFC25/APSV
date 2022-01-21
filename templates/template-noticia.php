
<?php
/**
 * Template Name: post
 */

 use Roots\Sage\Titles;
?>


<?php while (have_posts()) : the_post(); ?>
  <div class="hero">
    <?php the_post_thumbnail('',['class' => 'img-fluid hero_image']); ?>
    <div class="container hero_title">
        <div class="d-flex justify-content-center"><h4 style="text-align:center"><?php echo Titles\get_header_noticia(); ?></title></h4></div>
        <div class="d-flex justify-content-center"><h1 style="text-align:center"><?php echo Titles\title(); ?></title></h1></div>
    </div>
  </div>
  
  <?php if(Titles\get_tiene_autor()): ?>
  
  <div class="container-fluid" style="margin-top: -50px;">
      <div class="row">
        <div class="d-flex justify-content-center col">
        <img src="<?php echo Titles\get_foto_autor();?>" style="border-radius:150px; border:5px solid #FFFFFF" width=100px height=100px alt="">
        </div>
      </div>
      <div class="row mt-1">
        <div class="d-flex justify-content-center col">
            <p style="color:rgb(128, 128, 128);"><?php echo Titles\get_autor(); ?></p>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="container mt-5">
    <div class=row>
        <div class="col">
            <?php get_template_part('templates/content', 'page'); ?>
        </div> 
          
    </div>
  </div>

  <?php get_template_part('partials/botones-compartir'); ?>

  <?php endwhile; ?>
