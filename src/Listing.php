<?php

namespace mono;

class Listing extends MonoModel {

	protected $model = 'listing';

	public function removeContact($emails, $id){
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['emails'=>$emails];	
		$url = 'listing/'.$id.'/remove-contacts';
		return $this->master->call($url, $_params, 'post');
	}

	public function viewFromList($id) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['model'=>$this->model, 'id'=>$id];
		$url = 'listing/'.$id.'/contacts';
		return $this->master->call($url, $_params, 'get');
	}

	public function addContactToList($emails, $id){
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['emails'=>$emails];	
		$url = 'listing/'.$id.'/add-to-listing';
		return $this->master->call($url, $_params, 'post');
	}

	public function searchList($name){
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['name'=>'lista nueva febrero'];
		$url = 'listing/search/';
		return $this->master->call($url, $_params, 'post');
	}

	public function deleteList($id){
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['lista'=>$id];		
		$url = 'listing';
		return $this->master->call($url, $_params, 'delete');
	}

	public function getByName($name) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$new = str_replace(' ', '%20', $name);
		$_params = ['model'=>$this->model, 'name'=>$new];
		$url = $this->model.'/search/'.$new;
		return $this->master->call($url, $_params, 'get');
	}
}