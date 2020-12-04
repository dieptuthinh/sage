<?php
//single.php – Định dạng trang hiển thị nội dung của tất cả các Post.
namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Single extends Controller
{
  // protected $productId;
  // protected $product;

  // public function __before() {
  //   $this->productId = get_field('id');
  //   $this->product = (new WP_Query([
  //     'post_type' => 'product',
  //     'meta_key' => 'id',
  //     'meta_value' => $this->productId
  //   ]))->post;
  // }

  // public function product() {
  //   $pro = clone $this->product;
  //   $pro->image = get_post($pro->image)->guid;

  //   $pro->brand = get_term((int)$pro->brand[0])->name;

  //   $pro->material = get_term((int)$pro->material[0])->name;

  //   $pro->groupName = get_term((int)$pro->group[0])->name;
  //   $pro->groupLink = get_term_link((int)$pro->group[0]);

  //   return $pro;
  // }

  // public function sameProducts() {
  //   $pro = clone $this->product;

  //   $same = new WP_Query([
  //     'post_type' => 'product',
  //     'orderby' => 'post_date',
  //     'order'   => 'DESC',
  //     'posts_per_page' => 4,
  //     'meta_query'	=> array(
  //       'relation'		=> 'AND',
  //       array(
  //         'key'		=> 'id',
  //         'value'		=> $pro->id,
  //         'compare'	=> '!='
  //       ),
  //       array(
  //         'key'		=> 'group',
  //         'value'		=> $pro->group,
  //         'compare'	=> 'IN'
  //       ),
  //       array(
  //         'key'		=> 'brand',
  //         'value'		=> $pro->brand,
  //         'compare'	=> 'IN'
  //       ),
  //       array(
  //         'key'		=> 'material',
  //         'value'		=> $pro->material,
  //         'compare'	=> 'IN'
  //       )
  //     )
  //   ]);

  //   return array_map(function($pro) {
  //     $pro->image = get_post($pro->image)->guid;
  //     return $pro;
  //   }, $same->posts);
  // }

}
