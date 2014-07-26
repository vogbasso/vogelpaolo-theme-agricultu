// JavaScript Document

var loadHomePage=function(){
	var posts=getPosts(); 	
	console.log('le contenu des posts',posts);
}

// get Posts listes
var getPosts=function(){
	var data={
		'action':'doAjaxRequest',
		'count':10,
		'fn':'getPosts'
	};
 return	doAjaxRequest(data);
}


// document is ready build loading
jQuery(document).ready(function(){
	loadHomePage();	
});


