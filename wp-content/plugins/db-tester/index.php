<?php

/*
 * Plugin Name: DB tester plugin
 * Plugin URI: http://kiskoros.adventista.hu
 * Description: Plugin for test wordpress native db engine.
 * Version: 1.0
 * Author: Martin Caba
 * Author URI: http://kiskoros.adventista.hu
 * License: MIT
 *Text Domain: dbtester
 */

//Plugin indítása.
function load_db_tester_plugin() {
	add_menu_page ( 
		'DB test page', 
		'DB tester', 
		'edit_users', 
		'db_tester', 
		'init_db_tester_page'
	);
}
//Az akció, aminek a hatására az indító függvény lefut.
add_action( 'admin_menu', 'load_db_tester_plugin' );

//A menüpont tartalmának generálása.
function init_db_tester_page() {
	include 'db_page.php';
}

//Admin footer hurok (hook).
function my_action_callback() {
	global $wpdb;
	$records = $wpdb->get_results("SELECT * FROM $wpdb->posts");
	echo json_encode($records);
	//echo 'Szia JAVASCRIPT!';
	wp_die();
}
add_action('wp_ajax_my_action',  'my_action_callback');

//Ajax url beállítása a js-nek.
function pluginname_ajaxurl() {
	?>
		<script type="text/javascript">
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		</script>
	<?php
}
add_action('wp_head','pluginname_ajaxurl');
/*
var req = new XMLHttpRequest;
req.open('get',ajaxurl+ '?action=my_action');
req.onloadend = function( ev ) {
	console.log( JSON.parse(ev.target.response ) );
}
req.send()
*/