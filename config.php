<?php
/*
* Plugin Name: Change Product Author for Woocommerce
* Plugin URI: https://devx.art.br/plugins
* Description: Este plugin possibilita trocar o autor de um produto no Woocommerce com facilidade, mantendo a segurança do seu site sem acesso administrativo e extremamente leve para não afetar o desempenho de seu website.
* Version: 1.0.0
* Author: DevX Art.
* Author URI: https://devx.art.br

*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	function devx_cpaw_author() {
		add_post_type_support( 'product', 'author' );
	}
	add_action('init', 'devx_cpaw_author', 999 );