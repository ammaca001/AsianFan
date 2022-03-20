<?php 
/*
Hàm khai báo chức năng
 */


function asiavinafans_theme_setup(){
		//Load textdomain thiết lập
	load_theme_textdomain( 'asiavinafans' );

		//Đăng kí menus
	register_nav_menu('menu-header',__( 'Menu header', 'asiavinafans' ));

	//Chuyển về trình soạn thảo phiên bản cũ
	add_filter('use_block_editor_for_post', '__return_false');

	//Tự động thêm title cho mỗi trang
	add_theme_support( 'title-tag' );

	//Đăng kí widgets
	if (function_exists('register_sidebar')){
		/**
		 * Creates a sidebar
		 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		 */
		$args = array(
			'name'          => __( 'search', 'asiavinafans' ),
			'id'            => 'search',
			'description'   => 'search box',
			'class'         => 'search-box',
		);
		
		register_sidebar( $args );

	}
	//Đăng kí widgets
	if (function_exists('register_sidebar')){
		/**
		 * Creates a sidebar
		 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		 */
		$args = array(
			'name'          => __( 'search', 'asiavinafans' ),
			'id'            => 'search',
			'description'   => 'search box',
			'class'         => 'search-box',
		);
		
		register_sidebar( $args );

	}
	if (function_exists('register_sidebar')){
		/**
		 * Creates a sidebar
		 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		 */
		$args = array(
			'name'          => __( 'form', 'asiavinafans' ),
			'id'            => 'form-contacts',
			'description'   => 'form-contacts',
			'class'         => 'form-contacts',
		);
		
		register_sidebar( $args );

	}
	
}
add_action( 'init', 'asiavinafans_theme_setup' );

