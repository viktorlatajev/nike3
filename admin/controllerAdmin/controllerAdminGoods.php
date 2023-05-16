<?php
class controllerAdminGoods{
	
	//list Goods
	public static function GoodsList(){
		
		$arr=modelAdminGoods::getGoodsList();
		  include_once 'viewAdmin/goodsList.php';		
		}
	//--------------------------add
	public static function goodsAddForm()
	{		

		include_once('viewAdmin/goodsAddForm.php');	
	}
	
	public static function goodsAddResult()
	{
		$test = modelAdminGoods::getGoodsAdd();	
		include_once('viewAdmin/goodsAddForm.php');
	}
	
	//-------------------------edit
	public static function goodsEditForm($id)
	{		

		// var_dump($arr);
		$detail=modelAdminGoods::getGoodsDetail($id);
		// var_dump($detail);
		include_once('viewAdmin/goodsEditForm.php');	
	}
	
	public static function goodsEditResult($id)
	{
		$test = modelAdminGoods::getGoodsEdit($id);	
		// var_dump($test);
		include_once('viewAdmin/goodsEditForm.php');
	}	
	
		//-------------------------delete
	public static function goodsDeleteForm($id)
	{		
	
		$detail=modelAdminGoods::getGoodsDetail($id);
		include_once('viewAdmin/goodsDeleteForm.php');	
	}
	
	public static function goodsDeleteResult($id)
	{
		$test = modelAdminGoods::getGoodsDelete($id);	
		include_once('viewAdmin/goodsDeleteForm.php');
	}	
	
}//class
?>





























