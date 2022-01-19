
<?php
 use Roots\Sage\Titles;
?>


<div class="container">
    <div class="d-flex justify-content-center row">
      <div class=" d-flex justify-content-center col">
        <a target="_blank" href="<?php echo 'http://www.facebook.com/sharer.php?u='  . get_permalink(); ?>"  class="btn btn-primary m-4"><img src="<?php echo get_template_directory_uri() . '/dist/images/facebook.png'; ?>" width="20" height="20" alt="" > Facebook</a>
        <a target="_blank" href="<?php echo 'https://twitter.com/intent/tweet?text='. Titles\title() . '. ' . get_permalink(); ?>"  class="btn btn-info m-4"><img src="<?php echo get_template_directory_uri() . '/dist/images/twitter.png'; ?>" width="20" height="20" alt="" >  Twitter</a>
        <a target="_blank" href="<?php echo 'https://api.whatsapp.com/send?text=' . Titles\title() . '.    ' . get_permalink();?>"  class="btn btn-success m-4"><img src="<?php echo get_template_directory_uri() . '/dist/images/whatsapp.png'; ?>" width="20" height="20" alt="" > WhatsApp</a>
      </div>
    </div>
 </div>
