<?php
class modelAdminGoods{
	
	
	    public static function getGoodsList() {        
	
		$query = "SELECT goods.id, name, image_path, description, price, class, color_choice FROM goods
        LEFT JOIN colors_available
        ON goods.colors = colors_available.id DESC";
        $db = new CModel();
        $arr = $db->getData($query);
        return $arr;
    }
	
	//-------------------Add
	public static function getGoodsAdd(){
		$test=false;
		if(isset($_POST['save']))
		{	if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['colors']) && isset($_POST['class']) ){
			
			$name=$_POST['name'];
			$price=$_POST['price'];
			$color=$_POST['colors'];
			$class=$_POST['class'];
			
				 $image = $_POST['image_path'];
			//-----------------------------------------
			$sql="INSERT INTO goods (id, goods.name, price, image_path, colors, class) VALUES (NULL, '$name', '$price', '$image', '$color', '$class')";
					$db = new CModel();
					$item = $db->executeRun($sql);	
				if($item==true){
                $test=true;
            } 
		}
		}
		return $test;
	}
	//--------------------------goods detail id
		    public static function getGoodsDetail($id) {        
		$query = "SELECT goods.*, color_choice from goods LEFT JOIN colors_available
        ON goods.colors = colors_available.id where goods.id=".$id;
        $db = new CModel();
        $arr = $db->getOne($query);
        return $arr;
    }
	//-------------------------------goods edit	
	public static function getGoodsEdit($id){
		$test=false;
		// var_dump($_POST);
		
		
		if(isset($_POST['save'])){	
			
			if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['colors']) ){			
				$name=$_POST['name'];
				$price=$_POST['price'];
				$color=$_POST['colors'];
			
				
			$image=$_POST['image_path'];
			
			//-----------------------------------------
			if($image==""){				
				$sql="UPDATE goods SET goods.name = '$name', price = '$price', colors = '$color' WHERE goods.id = ".$id;
			}
			else{
				$sql="UPDATE goods SET goods.name = '$name', price = '$price', image_path = '$image', colors = '$color' WHERE goods.id = ".$id;
			}			
					$db = new CModel();
					$item = $db->executeRun($sql);	
				if($item==true){
					$test=true;
				} 
			}
		}
		return $test;
	}
	
	
	//------------------------goods delete
	
	public static function getGoodsDelete($id){
		$test=false;
		if(isset($_POST['save']))	{
			$sql="DELETE FROM goods WHERE goods.id = ".$id;
			$db = new CModel();
					$item = $db->executeRun($sql);	
				if($item==true){
                $test=true;
            } 			
		}				
		return $test;
		}
	
}//class
























