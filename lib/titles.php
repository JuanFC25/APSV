<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    return get_the_title();
  }
}

function subtitle(){
  if(! get_field('page_subtitle')){
    return '';
  }
  return get_field('page_subtitle');
}

function get_header_noticia(){
  if(! get_field('header')){
    return '';
  }
  return get_field('header');
}

function get_resumen_noticia(){
  if(! get_field('resumen_card')){
    return '';
  }
  return get_field('resumen_card');
}

function get_autor(){
  if(! get_field('autor')){
    return '';
  }
  return get_field('autor');
}


function get_foto_autor(){
  if(! get_field('foto_autor')){
    return '';
  }
  return get_field('foto_autor');
}

function get_con_autor(){
  return get_field('con_autor');
}
