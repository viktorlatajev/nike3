<?php
class controllerAdmin{
	
	//error page
	
	public static function error404(){
		include_once("viewAdmin/error404.php");
		
	}
	//--------------------form
	public static function formLoginSite(){
		include_once "viewAdmin/formLogin.php";
	}
	//-------------login
	public static function loginAction(){
		$logIn=false;
		$logIn=modelAdmin::userAuth();
		if($logIn){
			include_once "viewAdmin/startAdmin.php";
			
		}else{
			$_SESSION['errorString']='Неправильно e-mail или пароль';
			include_once "viewAdmin/formLogin.php";
		}
	}
	//-----------logout
	public static function logoutAction(){
		modelAdmin::userLogout();
		//include_once "viewAdmin/formLogin.php";
		header('Location:./');
	}
	
	
	//---------------------------------profile

	public static function profileTable()
	{			
		include_once('viewAdmin/profileTable.php');			
	}

	public static function profileEditResult()
	{	
		$test=modelAdmin::ChangePassword();
		include_once('viewAdmin/profileTable.php');			
	}

	
	
}//class
?>











