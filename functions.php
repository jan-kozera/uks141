<?php

	if(!defined('THEME_DIR')){
		define('THEME_DIR', get_theme_root().'/'.get_template().'/');
	}
	if(!defined('THEME_URL')){
		define('THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
	}
	
	require_once('wp_bootstrap_navwalker.php');
	
	add_theme_support( 'post-thumbnails');
	
	function pokaz($tablica){
		echo "<pre>";
			print_r($tablica);
		echo "</pre>";
	}
	
	function jquery_scripts() {
		wp_enqueue_script( 'jquery' );
	}
	add_action( 'wp_enqueue_scripts', 'jquery_scripts' );
	
	add_action( 'init', 'my_custom_menus' );
      function my_custom_menus() {
         register_nav_menus(
            array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
                    )
             );
      }

	function the_excerpt_max_charlength($charlength){
		echo cutText(get_the_excerpt(), $charlength);
		
	}		


	function cutText($text, $maxLength){
			
			$maxLength++;

			$return = '';
			if (mb_strlen($text) > $maxLength) {
				$subex = mb_substr($text, 0, $maxLength - 5);
				$exwords = explode(' ', $subex);
				$excut = - ( mb_strlen($exwords[count($exwords) - 1]) );
				if ($excut < 0) {
					$return = mb_substr($subex, 0, $excut);
				} else {
					$return = $subex;
				}
				$return .= 'Czytaj więcej';
			} else {
				$return = $text;
			}
			
			return $return;
		}

	add_action('init', 'init_posttypes');
	
	function init_posttypes(){
		$team_args = array(
		'labels' => array(
			'name' => 'Zespoły',
			'singular_name' => 'Zespoły',
			'all_items' => 'Wszystkie zespoły',
			'add_new' => 'Dodaj nowy zespół',
			'add_new_item' => 'Dodaj nowy zespół',
			'edit_item' => 'Edytuj zespół',
			'new_item' => 'Nowy zespół',
			'view_item' => 'Zobacz zespół',
			'search_items' => 'Szukaj zespołów',
			'not_found' => 'Nie znaleziono zespołów',
			'not_found_in_trash' => 'Brak zespołów w koszu',
			'parent_item_colon' => ''
		),
		'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
			'taxonomies'  => array( 'category' ),
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true
	);
	
	register_post_type('druzyny', $team_args);
		
		$kadra_args = array(
		'labels' => array(
			'name' => 'Kadra trenerska',
			'singular_name' => 'Kadra trenerska',
			'all_items' => 'Cała kadra trenerska',
			'add_new' => 'Dodaj nowego członka kadry trenerskiej',
			'add_new_item' => 'Dodaj nowego członka kadry trenerskiej',
			'edit_item' => 'Edytuj członka kadry trenerskiej',
			'new_item' => 'Nowy członek kadry trenerskiej',
			'view_item' => 'Zobacz członka kadry trenerskiej',
			'search_items' => 'Szukaj członków kadry trenerskiej',
			'not_found' => 'Nie znaleziono członków kadry trenerskiej',
			'not_found_in_trash' => 'Brak członków kadry trenerskiej w koszu',
			'parent_item_colon' => ''
		),
		'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
			'taxonomies'  => array( 'category' ),
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true
	);
	
	register_post_type('kadra', $kadra_args);
		
		$projekty_args = array(
		'labels' => array(
			'name' => 'Projekty',
			'singular_name' => 'Projekty',
			'all_items' => 'Wszystkie projekty',
			'add_new' => 'Dodaj nowy projekt',
			'add_new_item' => 'Dodaj nowy projekt',
			'edit_item' => 'Edytuj projekt',
			'new_item' => 'Nowy projekt',
			'view_item' => 'Zobacz projekt',
			'search_items' => 'Szukaj projektów',
			'not_found' => 'Nie znaleziono projektów',
			'not_found_in_trash' => 'Brak projektów w koszu',
			'parent_item_colon' => ''
		),
		'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
			'taxonomies'  => array( 'category' ),
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true
	);
	
	register_post_type('projekty', $projekty_args);
		
		$obozy_args = array(
		'labels' => array(
			'name' => 'Obozy',
			'singular_name' => 'Obozy',
			'all_items' => 'Wszystkie obozy',
			'add_new' => 'Dodaj nowy obóz',
			'add_new_item' => 'Dodaj nowy obóz',
			'edit_item' => 'Edytuj obóz',
			'new_item' => 'Nowy obóz',
			'view_item' => 'Zobacz obóz',
			'search_items' => 'Szukaj obozów',
			'not_found' => 'Nie znaleziono obozów',
			'not_found_in_trash' => 'Brak obozów w koszu',
			'parent_item_colon' => ''
		),
		'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
			'taxonomies'  => array( 'category' ),
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true
	);
	
	register_post_type('obozy', $obozy_args);
	
	
	}
	
	function replace_admin_menu_icons_css() {
        	?>
            <style>
                #adminmenu #menu-posts-druzyny a div.wp-menu-image:before {
					content: '\f307';
				}
				
				#adminmenu #menu-posts-projekty a div.wp-menu-image:before {
					content: '\f308';
				}
				
				#adminmenu #menu-posts-obozy a div.wp-menu-image:before {
					content: '\f488';
				}
				
				#adminmenu #menu-posts-kadra a div.wp-menu-image:before {
					content: '\f338';
				}
            </style>
            <?php
        }
        
    add_action( 'admin_head', 'replace_admin_menu_icons_css' );

	add_action( 'after_setup_theme', 'woocommerce_support' );

	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}



	add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );


	function custom_override_checkout_fields( $fields ) {
			unset($fields['billing']['billing_company']);
			unset($fields['billing']['billing_address_1']);
			unset($fields['billing']['billing_address_2']);
			unset($fields['billing']['billing_city']);
			unset($fields['billing']['billing_postcode']);
			unset($fields['billing']['billing_country']);
			unset($fields['billing']['billing_state']);
			unset($fields['account']['account_password']);
			unset($fields['account']['account_password-2']);
		return $fields;
	}

	add_filter( 'woocommerce_thankyou_order_received_text', 'avia_thank_you' );
	function avia_thank_you() {
	 $added_text = '<p>Dziękujemy. Otrzymaliśmy Twoje zamówienie. <br> Zamówienie składane w terminie 1-15 każdego miesiąca będzie realizowane do końca tego miesiąca. Zamówienie składanie w terminie 16-31 każdego miesiąca będzie realizowane do 15. dnia następnego miesiąca.</p>';
	 return $added_text ;
	}

	/**
	 * Hide out of stock product button.
	 *
	 * @param string $html
	 * @param WC_Product $product
	 * @param array $args
	 * @return string
	 */
	function ace_remove_out_of_stock_product_button( $html, $product, $args ) {
		if ( ! $product->is_in_stock() && ! $product->backorders_allowed() ) {
			return '';
		}

		return $html;
	}
	add_filter( 'woocommerce_loop_add_to_cart_link', 'ace_remove_out_of_stock_product_button', 10, 3 );


	add_filter( 'woocommerce_get_availability_text', 'my_woocommerce_get_availability_text', 10, 2 );
	function my_woocommerce_get_availability_text( $availability, $product) {
		if ( ! $product->is_in_stock() ) {
			if (function_exists('iphorm_popup')) {
				$availability = iphorm_popup(4, 'Change this to the text or HTML that will trigger the popup');   
			} else {
				$availability = 'W celu zakupu niniejszego sprzętu zapraszamy do sklepu stacjonarnego naszego partnera Vitasport przy ul. Olszynki Grochowskiej 11/15 w Warszawie.';
			}
		}
		return $availability;
	}

	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function arphabet_widgets_init() {

		register_sidebar( array(
			'name'          => 'Galeria',
			'id'            => 'galeria',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="side-title">',
			'after_title'   => '</h2>',
		) );
		
		register_sidebar( array(
			'name'          => 'Wydarzenia',
			'id'            => 'wydarzenia',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="side-title">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );


?>