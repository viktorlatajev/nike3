<?php ob_start(); ?>
 
<div class="container" style="min-height:400px;">
<div class="col-md-11">	 
 <h2>Удаление товара </h2>
 <?php 
 if(isset($test)){
	if($test==true)
		{
?>
	<div class="alert alert-info">
		<strong>Запись удалена. </strong><a href="goodsAdmin"> Список товаров</a>
	</div>
	<?php
		}
    else if($test==false)
    {
     ?>
		<div class="alert alert-warning">
			<strong>Ошибка удаления записи!</strong> <a href="goodsAdmin"> Список товаров</a>
		</div>
     <?php
        }	
 }
 else{
	?>
  <form method='POST' action="goodsDelResult?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <table class='table table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='title' class='form-control' required value="<?php  echo $detail['name']; ?>" readonly></td>
        </tr>
        <tr>
        <td>Price</td>
            <td>
			    <input type="text" class='form-control' required readonly value="<?php echo $detail['price']?>€">
			</td>
        </tr>
		<tr>
        <td>Color</td>
            <td>
                <input type="text" class='form-control' readonly required value="<?php echo $detail['colors']?>">
            </td>
        </tr>
		<tr>
            <td>OldPicture</td>
            <td><div>
			<?php echo $detail['image_path'];?>          
            </div></td>
        </tr>      				
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="save">
                    <span class="glyphicon glyphicon-plus"></span> Удалить
                </button>  
                <a href="goodsAdmin" class="btn btn-large btn-success">
                <i class="glyphicon glyphicon-backward"></i> &nbsp;Назад к списку</a>
            </td>
        </tr>
    </table>
</form> 
<?php
}
?>
	</div>			
</div>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>


































