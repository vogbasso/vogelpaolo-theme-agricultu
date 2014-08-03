'use strict';
// JavaScript Document



// global variables for homepage
var vogelpaolobassoHome={};

/**********************************HOME SERVICE******************************************************/
//get Post List for HomePage and save into factory
/**
 *vogelpaolobassoHome.getPosts 
 */
vogelpaolobassoHome.getPosts=function(){
	var deferred=new jQuery.Deferred();
	if(vogelpaolobassoHome.homePosts !== undefined && vogelpaolobassoHome.homePosts.length !=0){
		console.log('vogelpaolobassoHome.getPost exit :> Result ::',vogelpaolobassoHome.homePosts);
		deferred.resolve(vogelpaolobassoHome.homePosts);
		return deferred.promise();
	}
	var data={
		'action':'doAjaxRequest',
		'count':10,
		'fn':'getPosts',
		'nextNonce':vogelpaolobassoAjax.nextNonce
	};
	vogelpaolobassoApplication.doAjaxRequest(data).then(function(result){
		console.log('vogelpaolobassoHome.getPosts from server :> Result ::',result);
		vogelpaolobassoHome.homePosts=result;
		deferred.resolve(result);
	},function(error){
		console.log('vogelpaolobassoHome.getPosts from Server :> Error ::',error);
		deferred.reject(error);
	});
	return deferred.promise();
}

/***************************************HOME CONTROLLER**************************************************/
//loading of home page

/**
 *loadHomePage 
 */
var loadHomePage=function(){	
	// get Posts here and do something
	vogelpaolobassoHome.getPosts().then(function(result){
		vogelpaolobassoScope.homePosts=result;		
		jQuery.each(vogelpaolobassoScope.homePosts,function(key,value){
			jQuery("#home-content").append(function(){
				var homeArticle="<article id=\""+value.ID+"\"><header><a href=\""+value.guid+"\">"+value.post_title+"</a></header><div>"+value.post_content+"<></article>";
				return homeArticle;	
			});
		});
	},function(error){
		console.log('Home.loadHomePage :> ERROR ::',error);
	}); 
	console.log(jQuery(this));
}

/*******************************************HOME VIEW****************************************************************/
// document is ready build loading
jQuery(document).ready(function(){
	//loadHomePage();
	console.log('WINDOWS',window);
});
