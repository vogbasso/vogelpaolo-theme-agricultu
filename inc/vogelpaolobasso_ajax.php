<?php
// This functions are used for ajax
add_action('wp_ajax_doAjaxRequest','vogelpaolobasso_ajaxRequest');
add_action('wp_ajax_nopriv_doAjaxRequest','vogelpaolobasso_ajaxRequest');

//function unique pour l'exécution des différentes requêtes ajax
function vogelpaolobasso_ajaxRequest(){
	
	
		// check nonce	
	
	$nonce = $_REQUEST['nextNonce']; 	
	//if (! wp_verify_nonce($nonce,'vogelpaolobasso-wp-nonce')){
		//die( 'Busted!');
	//}
	
	switch($_REQUEST['fn']){
		case 'getPosts':
			$output=vogelpaolobasso_get_posts($_REQUEST['count']);
		break;
		default:
			$output = 'No function specified, check your jQuery.ajax() call';
		break;
	}
	
	header( "Content-Type: application/json" );
	//$output = json_encode($output);
	wp_send_json($output);
	//if(is_array($output)){
		//print_r($output);
	//}else{
		//echo $output;
	//}	
	die('Ok cool');

}

function vogelpaolobasso_get_posts($count){
	// get Posts from database
	$posts=get_posts();
	return $posts;
}

