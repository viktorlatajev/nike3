<?php
class modelAdminNews{
	
	
	    public static function getNewsList() {        
	//	$query = "SELECT news.*, category.name,users.username from news, category,users WHERE news.category_id=category.id AND news.user_id=users.id ORDER BY `news`.`id` DESC";
		$query = "SELECT goods.id, name, image_path, description, price, class, color_choice FROM goods
        LEFT JOIN colors_available
        ON goods.colors = colors_available.id DESC";
        $db = new CModel();
        $arr = $db->getData($query);
        return $arr;
    }
	
	//-------------------Add
	public static function getNewsAdd(){
		$test=false;
		if(isset($_POST['save']))
		{	if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['colors']) && isset($_POST['class']) ){
			
			$name=$_POST['name'];
			$price=$_POST['price'];
			$color=$_POST['colors'];
			$class=$_POST['class'];
			/*
			//----------------------images
				$image = $_FILES['picture']['name']; //
				if($image!=""){
				$uploaddir = '../images/';
				$uploadfile = $uploaddir . basename($_FILES['picture']['name']);
				copy($_FILES['picture']['tmp_name'], $uploadfile);
				}
				else{
				$image ="newsphoto.png";
				}*/
			//----------------------images type blob	
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
	//--------------------------news detail id
		    public static function getNewsDetail($id) {        
		$query = "SELECT goods.*, color_choice from goods LEFT JOIN colors_available
        ON goods.colors = colors_available.id where goods.id=".$id;
        $db = new CModel();
        $arr = $db->getOne($query);
        return $arr;
    }
	//-------------------------------news edit	
	public static function getNewsEdit($id){
		$test=false;
		// var_dump($_POST);
		
		
		if(isset($_POST['save'])){	
			
			if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['colors']) ){			
				$name=$_POST['name'];
				$price=$_POST['price'];
				$color=$_POST['colors'];
			
			//----------------------images type blob	
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
	
	public static function getNewsEditOld($id){
		$test=false;
		
		if(isset($_POST['save'])){	
			if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['goods.colors']) ){			
				$name=$_POST['name'];
				$price=$_POST['price'];
				$color=$_POST['goods.colors'];
			
			//----------------------images type blob	
			$image=$_FILES['image_path'];
			if($image!=""){
				 $image =addslashes(file_get_contents($_FILES['image_path']));
			/*	//----------------------images type text		
				$uploaddir = '../images/';
				$uploadfile = $uploaddir . basename($_FILES['picture']['name']);
				copy($_FILES['picture']['tmp_name'], $uploadfile);	*/	
			}
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
	//------------------------news delete
	
	public static function getNewsDelete($id){
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
























