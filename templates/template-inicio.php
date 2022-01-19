<?php
/**
 * Template Name: Inicio
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner mb-5 d-flex align-items-stretch" style="height: 400px;">
    <div class="carousel-item active">
      <img class="img-fluid d-block w-100" style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/la-agencia.jpg'; ?>" alt="First slide">
      <div class="carousel-caption ">
        <h4><b>LA AGENCIA</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/la-agencia'; ?>">Click Acá</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/capacitaciones.jpg'; ?>" alt="Second slide">
      <div class="carousel-caption">
        <h4><b>CURSOS Y CAPACITACIONES</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/cursos-y-capacitaciones'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/estadisticas.jpg'; ?>" alt="Second slide">
      <div class="carousel-caption">
        <h4><b>ESTADÍSTICAS</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/estadisticas'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/controles.jpeg'; ?>" alt="Second slide">
      <div class="carousel-caption">
        <h4><b>CONTROLES</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/controles'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/campaña.jpg'; ?>" alt="Second slide">
      <div class="carousel-caption">
        <h4><b>CAMPAÑAS</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/campanas-de-concientizacion'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/tramites.jpg'; ?>" alt="Second slide">
      <div class="carousel-caption">
        <h4><b>TRÁMITES</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/tramites'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/autopista-rosario-santa-fe.jpg'; ?>" alt="Second slide">
      <div class="carousel-caption">
        <h4><b>NOTICIAS</b></h4>
        <a class="btn btn-outline-light" href="<?php echo esc_url(home_url('/')) . '/noticias'; ?>">Click Aqui</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style="object-fit: cover; object-position: center; height: 100%; overflow: hidden; filter:brightness(80%);" src="<?php echo get_template_directory_uri() . '/dist/images/2020-07-27NID_268065O_1.jpeg'; ?>" alt="Second slide">
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



<div class="container-fluid bg-dark">
  <div class="row">
    <div class="d-flex justify-content-center col-11 m-4">
      <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FSeguridadVialSantaFe%2Fvideos%2F3152919228275420%2F&show_text=false&width=560&t=0" width="1200" height="631" style="border:none;overflow:hidden " scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
    </div>  
  </div>
   
</div>


<?php get_template_part("partials/banner-con-boton-info-transito"); ?>