<?php
class controllerAdminCategory{
	
	//list News
	public static function CategoryList(){
		
		$arr=modelAdminCategory::getCategoryList();
		  include_once 'viewAdmin/categoryList.php';		
		}
	
	//--------------------------add
	public static function categoryAddForm(){		
		
		include_once('viewAdmin/categoryAddForm.php');	
	}
	
	public static function categoryAddResult()
	{
		$test = modelAdminCategory::getCategoryAdd();	
		include_once('viewAdmin/categoryAddForm.php');
	}
	
	//-------------------------edit
	public static function categoryEditForm($id)
	{		
		
		$detail=modelAdminCategory::getCategoryDetail($id);
		include_once('viewAdmin/categoryEditForm.php');	
	}
	
	public static function categoryEditResult($id)
	{
		$test = modelAdminCategory::getCategoryEdit($id);	
		include_once('viewAdmin/categoryEditForm.php');
	}	
	
		//-------------------------delete
	public static function categoryDeleteForm($id)
	{		
		
		$detail=modelAdminCategory::getCategoryDetail($id);
		include_once('viewAdmin/categoryDeleteForm.php');	
	}
	
	public static function categoryDeleteResult($id)
	{
		$test = modelAdminCategory::getCategoryDelete($id);	
		include_once('viewAdmin/categoryDeleteForm.php');
	}	
	
}//class
?>





























