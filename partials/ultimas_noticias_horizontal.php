<?php $noticias = new WP_Query ([
    'post_type'  => 'post',
    'category_name' => 'ultimas-noticias'
]); ?>

    <?php 
    use Roots\Sage\Titles;
    ?>

        <div class="container-fluid">
            <h2 class="mb-4">Ultimas noticias:</h2>
            <div class="row d-flex justify-content-around ">
                
                <?php while ($noticias->have_posts()) : $noticias->the_post(); ?>
               
                <div class="col-11 col-lg-4  mb-4 d-flex align-items-stretch">

                <div class="card  noticias_item noticias_card_size" style="padding: 0px;">
                    <div class="card-img-top" style="height:260px;"><?php the_post_thumbnail('',['class' => 'img-fluid noticias_image']); ?></div>
                    <div class="card-body noticias_card_size">
                        <h4 class="card-title" > <?php the_title(); ?></h4>
                        <h6 class="card-text noticias_text" style="overflow:hidden;  text-overflow:ellipsis; max-height:200px;"><small><?php echo Titles\get_resumen_noticia();?></small></h6>
                        <a href=<?php echo get_permalink();?> class="btn btn-success btn-sm" style="float:right;">Ver mas >></a>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="row">
                                <div class="col">
                                    <p><?php echo Titles\get_header_noticia(); ?></h4>
                                </div>
                                <div class="col">
                                    <p style="float:right;"><?php echo get_the_date(); ?></p> 
                                </div>
                        </div>
                    </div>
                </div>

                

                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                
            </div>
        </div>
    


    
