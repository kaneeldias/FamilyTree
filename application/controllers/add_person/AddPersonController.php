<?php

require_once "application/controllers/KCI_Controller.php";
require_once "application/libraries/exceptions/MissingInputException.php";
require_once "application/libraries/exceptions/InvalidInputException.php";

class AddPersonController extends KCI_Controller {

	public function index(){
		$data['title'] = "Add Person";
		$this->loadView("add_person/index", $data);
	}

	public function add(){
		$output = [];
		try{

			$data = $this->getJSONData();
			if(!isset($data['f_name'])) throw new MissingInputException();
			if(!isset($data['l_name'])) throw new MissingInputException();
			if(!isset($data['gender'])) throw new MissingInputException();

			$this->load->model("person/PersonModel");
			$this->PersonModel->newPerson($data['f_name'], $data['l_name'], $data['gender']);

		}
		catch(MissingInputException $e ){
			$this->error(400);
			$output['message'] =  "There was an error with your inputs. Please check and try again.";
			echo json_encode($output);
		}
		catch(InvalidInputException $e){
			$this->error(400);
			$output['message'] =  "There was an error with your inputs. Please check and try again.";
			echo json_encode($output);
		}
		catch(Exception $e){
			$this->error(500);
		}

	}
}
