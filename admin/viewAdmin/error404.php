<!-- Заголовок title -->
<?php $title = 'Страница не найдена'; ?>

<?php ob_start() ?>
<h2>404 ошибка  </h2>
<article>

	<h3>ERROR404</h3>

</article>
<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php";