<?php

namespace mono;

class MonoModel {

	protected $model;

	public function __construct(Monocontact $master) {
		$this->master = $master;
	}

	public function listing() {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['model'=>$this->model];
		$url = $this->model;
		return $this->master->call($url, $_params, 'get');
	}

	public function view($id) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['model'=>$this->model, 'id'=>$id];
		$url = $this->model.'/'.$id;
		return $this->master->call($url, $_params, 'get');
	}

	public function find($columns) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['model'=>$this->model, 'columns'=>$columns];
		return $this->master->call('find', $_params);
	}

	public function create($columns) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = $columns;
		print_r ($_params);
		$url = $this->model;
		return $this->master->call($url, $_params, 'post');
	}

	

}