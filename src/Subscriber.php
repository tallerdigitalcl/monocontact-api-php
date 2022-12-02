<?php

namespace mono;

class Subscriber extends MonoModel {

	protected $model = 'subscriber';

	public function createWithList($columns) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = $columns;
		// print_r ($_params);
		$url = $this->model.'/with-list';
		return $this->master->call($url, $_params, 'post');
	}

	public function createMultipleWithList($columns) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = $columns;
		// print_r ($_params);
		$url = $this->model.'/multiple/with-list';
		return $this->master->call($url, $_params, 'post');
	}

}