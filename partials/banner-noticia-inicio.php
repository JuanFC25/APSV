<?php $posts = new WP_Query ([
    'post_type'  => 'post',
    'post_per_page' => 1,
    'category_name' => 'noticia-principal-pagina-inicio'

]); ?>


<?php
 use Roots\Sage\Titles;
?>




<?php while ($posts->have_posts()) : $posts->the_post(); ?>
<div class="container-fluid d-flex align align-items-stretch">
    <div class="d-flex align-items-stretch row">
        <div class= "col-12 col-md-6 d-flex justify-content-end" style="margin: 0px; padding: 0px;">
            <div class="card">
                <div class="card-header">
                <h4><?php echo Titles\get_header_noticia(); ?></h4>
                </div>
                <div class="card-body">
                    <h2 class="card-title "><b> <?php the_title(); ?></b></h2>
                    <a href=<?php echo get_permalink();?> class="btn btn-success btn-sm" style="float:right;">Ver mas >></a>
                </div>
                <div class="card-footer text-muted">
                    <p style="float:right;"><?php echo get_the_date(); ?></p>
                </div>
            </div>

        </div>  
        <div class= "col d-flex align-items-center " style="margin: 0px; padding: 0px;">
        <div class="d-none d-md-block">
                <div class="hero">
                    <?php the_post_thumbnail('',['class' => 'img-fluid banner-noticias_image ']); ?>
                </div>
        </div>
        </div>
    </div>
</div>    
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>