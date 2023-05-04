<?php

require_once ('./models/CModel.php');
require_once('./views/CView.php');

class CController {
    public $model;
    public $view;

    public function SetMainPage () {
        $model = new CModel();
        $resultModel = $model->GetData();
        $resultNews = $model->GetDataNews();

        $resultAll = [];
        $resultAll[0] = $resultModel;
        $resultAll[1] = $resultNews;
        
        return $resultAll;
    }
}