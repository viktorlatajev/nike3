<?php ob_start() ?>

<h2>Список новинок </h2>

<div class="container" style="min-height:400px;">
	<div style="margin:20px;">
		<a class="btn btn-primary" href="goodsAdd" role="button">Добавить товар</a>
	</div>
	<div class="col-md-11">		
		<table class='table table-bordered table-responsive'>
			<tr>
				<th width="10%">ID</th>
				<th width="70%">Товары</th>
				<th width="20%"></th>
			</tr>
		<?php
		
		foreach($arr as $row){
			
		echo '<tr>';
		
			echo '<td>'.$row['id'].'</td>	';
			
			echo '<td><b>Name:</b> '.$row['name'].'';
			
			echo '<br><b>Price: </b><i>'.$row['price'].'€</i>';
			echo '<br><b>Class: </b><i>'.$row['class'].'</i>';
			echo '<br><b>Color: </b><i>'.$row['color_choice'].'</i>';
			echo '<br><b>Image: </b><i>'.$row['image_path'].'</i>';
			echo '</td>';
			echo '<td>
			<a href="goodsEdit?id='.$row['id'].'">Изменить <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="goodsDel?id='.$row['id'].'">Удалить <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
			</td>	';
		
		echo '</tr>';
		}
		
		?>
		</table>  			
	</div>			
</div>
<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php"; ?>















