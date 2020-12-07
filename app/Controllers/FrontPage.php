<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
  public static function getSuggestions() {
    $query = new WP_Query([
      'post_type' => 'product',
      'orderby' => 'post_date',
      'order'   => 'DESC',
      'posts_per_page' => 4
    ]);
    return array_map(function($pro) {
      $pro->image = get_post($pro->image)->guid;
      return $pro;
    }, $query->posts);
  }

  // public function sliders() {
  //   return [
  //     [
  //       'link' => '#',
  //       'image' => get_template_directory_uri(  ) . '/assets/images/banner2.jpg'
  //     ],
  //     [
  //       'link' => '#',
  //       'image' => get_template_directory_uri(  ) . '/assets/images/banner3.jpg'
  //     ],
  //     [
  //       'link' => '#',
  //       'image' => get_template_directory_uri(  ) . '/assets/images/banner4.jpg'
  //     ],
  //     [
  //       'link' => '#',
  //       'image' => get_template_directory_uri(  ) . '/assets/images/banner5.jpg'
  //     ]
  //   ];
  // }
}
