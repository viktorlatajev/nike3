<?php

require_once ('./models/CModel.php');
require_once('./views/CView.php');

class CController {
    public $model;
    public $view;

    public static function SetMainPage () {
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

    public static function SetAirForce () {
        $model = new CModel();
        $resultModel = $model->GetData();
        $resultLikes = $model->GetDataLikes();
        
        $resultAll = [];
        $resultAll[0] = $resultModel;
        $resultAll[3] = $resultLikes;
        
        return $resultAll;
    }

    public static function error404 () {
        include_once 'views/view_error404.php';
    }
}