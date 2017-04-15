<?php

require_once "application/controllers/KCI_Controller.php";

class CreateRelationShipController extends KCI_Controller{

    public function index(){
        $data['title'] = "Create Relationship";
        $this->loadView("create_relationship/index", $data);
    }

}