<?php
/**
 * Template Name: Pagina-La agencia
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
    <div class="row">
        <div class="col-11 col-lg-6 ml-2">
            <div class="mb-5"><?php the_field('mapa');?></div>
        </div> 
        <div class="col-11 col-lg-5 ml-2">
            <div class="d-flex justify-content-center row mb-3">
                <h1><b>APSV Santa Fe</b></h1>
            </div>
            <div class="row mb-5">
                <div class="col">
                  <p class="h4"><b>UBICACIÓN</b></p>
                  <p style="color:rgb(128,128,128);">25 de Mayo 2251 - 2º piso (Galería Santa Fe) - Santa Fe</p>
                </div>
                <div class="col">
                  <p class="h4"><b>CONTACTO</b></p>
                  <p style="color:rgb(128,128,128);">Teléfono: (0342) 4815575</p>
                </div>
            </div>
            <div class="row">
              <div class="col">
                  <p class="h4"><b>HORARIOS DE ATENCIÓN</b></p>
                  <p style="color:rgb(128,128,128);">Lunes a Viernes de 07:00 a 13:00 hs</p>
                  </div>
              <div class="col">
                  <p class="h4"><b>REDES SOCIALES</b></p>
                      
                      <a href="https://www.facebook.com/SeguridadVialSantaFe/" class="btn btn-secondary m-2"><img src="<?php echo get_template_directory_uri() . '/dist/images/facebook.png'; ?>" width="20" height="20" alt="" ></a>
                      <a href="https://twitter.com/RedSegVial" class="btn btn-secondary m-2"><img src="<?php echo get_template_directory_uri() . '/dist/images/twitter.png'; ?>" width="20" height="20" alt="" ></a>
                      <a href="https://www.instagram.com/apsv_santa_fe/" class="btn btn-secondary m-2"><img src="<?php echo get_template_directory_uri() . '/dist/images/instagram.png'; ?>" width="20" height="20" alt="" ></a>
                    
              </div>
            </div>
            
        </div>
    </div>
  </div>

  <?php get_template_part('partials/botones-compartir'); ?>

  <?php get_template_part("partials/banner-con-boton-info-transito"); ?>

<?php endwhile; ?>

