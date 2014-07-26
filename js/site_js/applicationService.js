//Javascript Document
var doAjaxRequest=function(data){
	//url pour les requêtes ajax
	var url='http://www.agri-cultu.org/wp-admin/admin-ajax.php';
	jQuery.ajax({
		url:vogelpaolobassoAjax.ajaxurl,
		data:data,
		dataType:'JSON',
		success:function(result){
			console.log('This is the success of the function',result);
		},
		error:function(error){
			console.log('This is an error of the function',error);
		}
	});
}

