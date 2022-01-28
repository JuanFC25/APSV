<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


function get_foto_la_agencia(){
  if(! get_field('foto_la_agencia')){
    return '';
  }
  return get_field('foto_la_agencia');
}


function get_foto_cursos_y_capacitaciones(){
  if(! get_field('foto_cursos_y_capacitaciones')){
    return '';
  }
  return get_field('foto_cursos_y_capacitaciones');
}


function get_foto_estadisticas(){
  if(! get_field('foto_estadisticas')){
    return '';
  }
  return get_field('foto_estadisticas');
}


function get_foto_controles(){
  if(! get_field('foto_controles')){
    return '';
  }
  return get_field('foto_controles');
}


function get_foto_campanas(){
  if(! get_field('foto_campanas')){
    return '';
  }
  return get_field('foto_campanas');
}


function get_foto_tramites(){
  if(! get_field('foto_tramites')){
    return '';
  }
  return get_field('foto_tramites');
}


function get_foto_noticias(){
  if(! get_field('foto_noticias')){
    return '';
  }
  return get_field('foto_noticias');
}


function get_foto_informe_de_transito(){
  if(! get_field('foto_informe_de_transito')){
    return '';
  }
  return get_field('foto_informe_de_transito');
}



function get_foto_boton_informe_de_transito(){
  if(! get_field('boton_informe_de_transito')){
    return '';
  }
  return get_field('boton_informe_de_transito');
}


function get_foto_boton_movilidad_infantil_segura(){
  if(! get_field('boton_movilidad_infantil_segura')){
    return '';
  }
  return get_field('boton_movilidad_infantil_segura');
}

function tiene_video(){
  return get_field('con_video');
}

function get_codigo_video(){
  if(! get_field('codigo_video')){
    return '';
  }
  return get_field('codigo_video');
}

function tiene_ultimas_noticias(){
  return get_field('con_ultimas_noticias');
}