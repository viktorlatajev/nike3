<?php ob_start(); ?>
 
<div class="container" style="min-height:400px;">
<div class="col-md-11">	
 
 <h2>Добавление товара </h2>
 <?php 
 if(isset($test)){
	if($test==true)
		{
?>
	<div class="alert alert-info">
		<strong>Запись добавлена. </strong><a href="goodsAdmin"> Список товаров</a>
	</div>
	<?php
		}
    else if($test==false)
    {
     ?>
		<div class="alert alert-warning">
			<strong>Ошибка добавления записи!</strong> <a href="goodsAdmin"> Список товаров</a>
		</div>
     <?php
        }	
 }
 else{
	?>
  <form method='POST' action="goodsAddResult" enctype="multipart/form-data">
    <table class='table table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' required></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name='price' class="form-control" required>€</td>
        </tr>
        <tr>
            <td>Class</td>
            <td>
                <input type="text" name='class' class='form-control' required>
            </td>
        </tr>
		<tr>
            <td>Color</td>
            <td>
                <input type="text" name='colors' class='form-control' required >
			</td>
        </tr>	
        <tr>
            <td>Image</td>
            <td><div>
                <input type="text" name='image_path' class='form-control' required>
            </div></td>
        </tr>	
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="save">
                    <span class="glyphicon glyphicon-plus"></span> Добавить
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


































