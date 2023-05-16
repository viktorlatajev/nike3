<?php
class modelAdminCategory{
	
//--------------------------List
public static function getCategoryList(){
	$sql = "SELECT goods.id, goods.name, image_path, description, price, class, color_choice FROM goods
	LEFT JOIN colors_available
	ON goods.colors = colors_available.id ASC";
		$db = new CModel();
        //$rows = ������ ������
        $rows = $db->getData($sql);
        //----------------------------------------------------------
        return $rows;
	
}	

public function getCategoryDetail($id){
	$sql = "SELECT * FROM goods WHERE id=".$id;
		$db = new CModel();
        //$rows = ������ ������
		// echo $sql;
        $row = $db->getOne($sql);
        //----------------------------------------------------------
        return $row;	
}	
// --------------add category
public function getCategoryAdd(){
	$test=false;
		if(isset($_POST['save'])){				
			if(isset($_POST['name'])  ){
			$category = $_POST['name'];	
			//-----------------------������ �� ���������� ������ � ����
			$sql="INSERT INTO goods (`id`, `name`) VALUES (NULL, '$category')";
			$db = new Cmodel();
			$item = $db->executeRun($sql);	
			if($item) $test=true;
			}
		}		
	return $test;
}

// --------------edit category
public function getCategoryEdit($id)
{
	$test=false;
		if(isset($_POST['save']))
		{				
			if(isset($_POST['name'])  ){
			$category = $_POST['name'];		
			//-----------------------������ �� ��������� ������ � ����
			
			$sql="UPDATE `category` SET `name` = '$category' WHERE `category`.`id` = ".$id;
			$db = new CModel();
			$item = $db->executeRun($sql);				
			if($item) $test=true;
			}
		}	
return $test;		
	
}

// --------------delete category
public function getCategoryDelete($id)
{
	$test=false;
		if(isset($_POST['save']))
		{			
			//-----------------------������ �� �������� ������ � ����			
			$sql="DELETE FROM `category` WHERE `category`.`id` =".$id;
			$db = new Cmodel();
			$item = $db->executeRun($sql);				
			if($item) $test=true;
			
		}	
return $test;		
	
}



}
?>