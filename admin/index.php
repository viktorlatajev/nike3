<?php
session_start();
require_once('../models/CModel.php');//База данных

include_once("modelAdmin/modelAdmin.php");
include_once("modelAdmin/modelAdminGoods.php");

include_once("controllerAdmin/controllerAdmin.php");
include_once("controllerAdmin/controllerAdminGoods.php");

include_once("routeAdmin/routingAdmin.php");


echo $response;
