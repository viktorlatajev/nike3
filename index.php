<?php

require_once ('views/CView.php');
require_once ('controllers/CController.php');

$view = new CView();
$controller = new CController();

$pageBody = $view->ViewMainPage();
$pageFooter = $view->GetFooter();


include($pageFooter);

