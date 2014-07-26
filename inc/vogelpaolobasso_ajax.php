<?php

//function unique pour l'exécution des différentes requêtes ajax
function vogelpaolobasso_ajaxRequest(){
	switch($_REQUEST['fn']){
		case "getPosts":
			$output=vogelpaolobasso_ajaxGetPosts();
		break;
		default:
			$output = 'No function specified, check your jQuery.ajax() call';
		break;
	}
	$output=json_encode($output);
	if(is_array($output)){
		print_r($output);
	}else{
		echo $output;
	}
	die();
}

function vogelpaolobasso_ajaxRequest(){
	// get Posts from database
	$posts=get_posts();
	return $posts;
}

// This functions are used for ajax
add_action('wp_ajax_doAjaxRequest', 'vogelpaolobasso_ajaxRequest');
add_action('wp_ajax_nopriv_doAjaxRequest', 'vogelpaolobasso_ajaxRequest');
