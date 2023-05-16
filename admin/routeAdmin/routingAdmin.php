<?php
//вычислить маршрут из адресной строки
	$host = explode('?', $_SERVER['REQUEST_URI'])[0];
	$num = substr_count($host, '/');
	$path = explode('/', $host)[$num];
	
	if($path=="" OR $path=="index"){
		$response=controllerAdmin::formLoginSite();
		
	}
	
	elseIf($path=='login'){
		$response=controllerAdmin::loginAction();
	}
	
		elseIf($path=='logout'){
		$response=controllerAdmin::logoutAction();
	}
	
		//------------------------------------listNews
	elseif($path=='newsAdmin'){
		$response=controllerAdminNews::NewsList();
		
	}
	//---------------add news
		elseif($path=='newsAdd'){
		$response=controllerAdminNews::newsAddForm();
		
	}
	elseif($path == 'newsAddResult') {		
	$response = controllerAdminNews::newsAddResult();	
}


	//---------------edit news
		elseif($path=='newsEdit' && isset($_GET['id'])){
		$response=controllerAdminNews::newsEditForm($_GET['id']);
		
	}
	elseif($path == 'newsEditResult' && isset($_GET['id'])) {		
	$response = controllerAdminNews::newsEditResult($_GET['id']);	
}






	//---------------delete news
	elseif($path=='newsDel' && isset($_GET['id'])){
		$response=controllerAdminNews::newsDeleteForm($_GET['id']);
		
	}
	elseif($path == 'newsDelResult' && isset($_GET['id'])) {		
		$response = controllerAdminNews::newsDeleteResult($_GET['id']);	
	}
	
	
	//------------------------------------listCategory
	elseif($path=='categoryAdmin'){
		$response=controllerAdminCategory::CategoryList();
		
	}
	
	//---------------add category
		elseif($path=='categoryAdd'){
		$response=controllerAdminCategory::categoryAddForm();
		
	}
	elseif($path == 'categoryAddResult') {		
	$response = controllerAdminCategory::categoryAddResult();	
}
	//---------------edit category
		elseif($path=='categoryEdit' && isset($_GET['id'])){
		$response=controllerAdminCategory::categoryEditForm($_GET['id']);
		
	}
	elseif($path == 'categoryEditResult' && isset($_GET['id'])) {		
	$response = controllerAdminCategory::categoryEditResult($_GET['id']);	
}
	
		//---------------delete news
	elseif($path=='categoryDel' && isset($_GET['id'])){
		$response=controllerAdminCategory::categoryDeleteForm($_GET['id']);
		
	}
	elseif($path == 'categoryDelResult' && isset($_GET['id'])) {		
		$response = controllerAdminCategory::categoryDeleteResult($_GET['id']);	
	}
	
	
	//-------------------profile

elseif($path == 'profile') {	
	$response = ControllerAdmin::profileTable();
}

elseif($path == 'profileEdit') {	
	
	$response = ControllerAdmin::profileEditForm();		
	
}
elseif($path == 'profileEditResult') {	
			
	$response = ControllerAdmin::profileEditResult();		
	
}

	
	
	
	
	
	
	
	
	
	
	else{
		
	$response=controllerAdmin::error404();	
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	