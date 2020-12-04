<?php
//Định dạng hiển thị cho toàn bộ trang lưu trữ trên website như lưu trữ theo ngày tháng, category, tag, custom taxonomy,..
namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Archive extends Controller
{
  public static function products() {
    $termId = get_queried_object()->term_id;

    $query = new WP_Query([
      'post_type' => 'product',
      'orderby' => 'post_date',
      'order'   => 'DESC',
      'meta_key' => 'group',
      'meta_value' => $termId
    ]);
    return array_map(function($pro) {
      $pro->image = get_post($pro->image)->guid;
      return $pro;
    }, $query->posts);
  }
}
