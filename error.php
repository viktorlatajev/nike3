<?php

require_once ('views/CView.php');
require_once ('controllers/CController.php');

$view = new CView();
$controller = new CController();

include_once 'route/routing.php';




include 'views/footer.php';

