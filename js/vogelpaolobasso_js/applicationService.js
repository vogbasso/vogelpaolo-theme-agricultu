'use strict';
//Javascript Document
var vogelpaolobassoApplication={};
var vogelpaolobassoScope={};
// méthode for Ajax Request
vogelpaolobassoApplication.doAjaxRequest=function(data){
	var deferred=new jQuery.Deferred();
	//url pour les requêtes ajax
	//var url='http://www.agri-cultu.org/wp-admin/admin-ajax.php';
	console.log('contenu de la varialble VogelpaolobassoAjax',vogelpaolobassoAjax);
	jQuery.ajax({
		url: vogelpaolobassoAjax.ajaxUrl,
		data:data,
		dataType:'JSON',
		success:function(result){
			console.log('This is the success of the function',result);
			deferred.resolve(result);
		},
		error:function(error){
			console.log('This is an error of the function',error);
			deferred.reject(error);
		}
	});
	return deferred.promise();
};

//méthode for setting and getting data in local storage
vogelpaolobassoApplication.setInLocalStorage=function(key,value){
	//if(typeof(Storage)!=='undefined'){
		//if(typeof(key)==='string'){
			
	//	}
//	}
};
vogelpaolobassoApplication.getInLocalStorage=function(key){

};

//Vérify on load that Data doesn't exist
jQuery(document).ready(function(){
	jQuery("#menu-menu-de-gauche").attr("class","list-unstyle");
});

