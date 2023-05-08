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
        $resultCollections = $model->GetDataCollections();

        $resultAll = [];
        $resultAll[0] = $resultModel;
        $resultAll[1] = $resultNews;
        $resultAll[2] = $resultCollections;
        
        return $resultAll;
    }

    public function SetAirForce () {
        $model = new CModel();
        $resultModel = $model->GetData();
        

        $resultAll = [];
        $resultAll[0] = $resultModel;
        
        
        return $resultAll;
    }
}