<?php

namespace mono;

class Contacto extends MonoModel {

	protected $model = 'contacto';

	public function removeFromList($columns, $code){
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = $columns;
		$url = $this->model.'/'.$code.'/remove-from-listing';
		return $this->master->call($url, $_params, 'post');
	}

	public function addToList($columns, $code){
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = $columns;
		$url = $this->model.'/'.$code.'/add-to-listing';
		return $this->master->call($url, $_params, 'post');
	}

	public function searchContact($columns){
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = $columns;
		$url = $this->model.'/search/';
		return $this->master->call($url, $_params, 'post');
	}

	// public function viewContactsFields(){
	// 	if (!$this->model) throw new \Exception('You must enter a model');;
	// 	$_params = ['model'=>$this->model];
	// 	$url = 'contacto/contact-field';
	// 	return $this->master->call($url, $_params, 'get');
	// }

	

	// public function createContactField($columns){
	// 	if (!$this->model) throw new \Exception('You must enter a model');;
	// 	$_params = $columns;
	// 	$url = $this->model.'/contact-field';
	// 	return $this->master->call($url, $_params, 'post');
	// }


	// public function addContactField($columns){
	// 	if (!$this->model) throw new \Exception('You must enter a model');;
	// 	$_params = $columns;
	// 	$url = $this->model.'/contact-field/add';
	// 	return $this->master->call($url, $_params, 'post');
	// }

	// public function updateContactFieldFromContact($columns){
	// 	if (!$this->model) throw new \Exception('You must enter a model');;
	// 	$_params = $columns;
	// 	$url = $this->model.'/contact-field/update';
	// 	print_r($_params);
	// 	return $this->master->call($url, $_params, 'post');
	// }

	// public function getContactFieldByName($name) {
	// 	if (!$this->model) throw new \Exception('You must enter a model');;
	// 	$new = str_replace(' ', '%20', $name);
	// 	$_params = ['model'=>$this->model, 'name'=>$new];
	// 	$url = $this->model.'/contact-field/search/'.$new;
	// 	return $this->master->call($url, $_params, 'get');
	// }

	
}