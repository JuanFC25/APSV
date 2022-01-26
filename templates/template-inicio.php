<?php
/**
 * Template Name: Inicio
 */

use Roots\Sage\Extras;
?>





<?php while (have_posts()) : the_post(); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner mb-5 d-flex align-items-stretch" style="height: 400px;">
    <div class="carousel-item active">
      <img class="img-fluid d-block w-100" style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_la_agencia(); ?>" alt="">
      <div class="carousel-caption ">
        <h4><b>LA AGENCIA</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/la-agencia'; ?>">Click Acá</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_cursos_y_capacitaciones(); ?>" alt="">
      <div class="carousel-caption">
        <h4><b>CURSOS Y CAPACITACIONES</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/cursos-y-capacitaciones'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_estadisticas(); ?>" alt="">
      <div class="carousel-caption">
        <h4><b>ESTADÍSTICAS</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/estadisticas'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_controles(); ?>" alt="">
      <div class="carousel-caption">
        <h4><b>CONTROLES</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/controles'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_campanas(); ?>" alt="">
      <div class="carousel-caption">
        <h4><b>CAMPAÑAS</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/campanas-de-concientizacion'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_tramites(); ?>" alt="">
      <div class="carousel-caption">
        <h4><b>TRÁMITES</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/tramites'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_noticias(); ?>" alt="">
      <div class="carousel-caption">
        <h4><b>NOTICIAS</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/noticias'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo Extras\get_foto_informe_de_transito(); ?>" alt="">
      <div class="carousel-caption">
        <h4><b>INFORME DE TRÁNSITO</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/informe-de-transito'; ?>">Click Aqui</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php get_template_part('templates/content', 'page'); ?>
  
<?php endwhile; ?>

<?php get_template_part("partials/banner-noticia-inicio"); ?>

<?php get_template_part("partials/banner-con-boton-movilidad-infantil"); ?>

<div class="container-fluid">
  <?php get_template_part("partials/ultimas_noticias_horizontal"); ?>
</div>


<?php if(Extras\tiene_video()) : ?>
<div class="container-fluid bg-dark">
  <div class="container bg-dark">
    <div class="d-flex justify-content-center row">
      <div class="d-flex justify-content-center col-11 m-4">
        <div class="embed-container d-sm-none">
          <?php the_field('link_video_chico'); ?>
        </div>
        <div class="embed-container d-none d-sm-block d-lg-none">
          <?php the_field('link_video_medio'); ?>
        </div>
        <div class="embed-container d-none d-lg-block">
          <?php the_field('link_video_grande'); ?>
        </div>
      </div>  
    </div>
  </div>  
</div>
<?php endif; ?>


<?php get_template_part("partials/banner-con-boton-info-transito"); ?>