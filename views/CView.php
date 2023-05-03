<?php

require_once ('./controllers/CController.php');

class CView {
    public function ViewMainPage(){
        $controller = new CController();
        $arrayResult = $controller->SetMainPage();
        include 'views/view_mainPage.php';
        return $arrayResult;
    }
}