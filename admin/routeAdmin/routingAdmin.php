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
		// $response=controllerAdminGoods::GoodsList();
	}
	
		elseIf($path=='logout'){
		$response=controllerAdmin::logoutAction();
	}
	
		//------------------------------------listGoods
	elseif($path=='goodsAdmin'){
		$response=controllerAdminGoods::GoodsList();
		
	}
	//---------------add goods
		elseif($path=='goodsAdd'){
		$response=controllerAdminGoods::goodsAddForm();
		
	}
	elseif($path == 'goodsAddResult') {		
	$response = controllerAdminGoods::goodsAddResult();	
}


	//---------------edit goods
		elseif($path=='goodsEdit' && isset($_GET['id'])){
		$response=controllerAdminGoods::goodsEditForm($_GET['id']);
		
	}
	elseif($path == 'goodsEditResult' && isset($_GET['id'])) {		
	$response = controllerAdminGoods::goodsEditResult($_GET['id']);	
}






	//---------------delete goods
	elseif($path=='goodsDel' && isset($_GET['id'])){
		$response=controllerAdminGoods::goodsDeleteForm($_GET['id']);
		
	}
	elseif($path == 'goodsDelResult' && isset($_GET['id'])) {		
		$response = controllerAdminGoods::goodsDeleteResult($_GET['id']);	
	}
	
	
	
	
	
	//-------------------profile

elseif($path == 'profile') {	
	$response = ControllerAdmin::profileTable();
}

	

elseif($path == 'profileEditResult') {	
			
	$response = ControllerAdmin::profileEditResult();		
	
}

	
	
	
	
	
	
	
	
	
	
	else{
		
	$response=controllerAdmin::error404();	
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	