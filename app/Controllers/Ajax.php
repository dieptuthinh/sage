<?php
namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Ajax extends Controller
{
	public static function buyProduct() {
		if (isset($_POST['id']) && isset($_POST['amount'])) {
			$id = $_POST['id'];
			$amount = (int)$_POST['amount'];
			$product = (new WP_Query([
				'post_type' => 'product',
				'meta_key' => 'id',
				'meta_value' => $id
			]))->post;

			if ($product) {
				$soldOld = (int)$product->sold;
				$inventoryOld = (int)$product->inventory;
				if ($inventoryOld < $amount) {
					wp_send_json( [
						"message" => "Out of stock"
					], 400 );
				} else {
					$check1 = \update_field('sold', $soldOld + $amount, $product->ID);
					$check2 = \update_field('inventory', $inventoryOld - $amount, $product->ID);
					if ($check1 && $check2) {
						wp_send_json( [
							"amount" => (int)$_POST['amount'],
							"product" => $product
						], 200 );
					} else {
						wp_send_json( [
							"message" => "Buy Failed"
						], 400 );
					}
				}
			} else {
				wp_send_json( [
					"message" => "Product not found"
				], 404 );
			}
		}
		
		wp_die(  );
	}
}