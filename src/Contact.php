<?php

namespace mono;

class Contact extends MonoModel {

	protected $model = 'contact';

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
	
}