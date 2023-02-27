<?php

namespace mono;

class CustomField extends MonoModel {

    protected $model = 'custom-field';


    public function getCustomFieldByName($name) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = $this->model;
		$url = $this->model.'/search/'.$name;
		return $this->master->call($url, $_params, 'post');
	}

}
