<?php

class Home extends Controller {
  public function index($name = '') {
  	$user = $this->model('User');
  	if($name != '')
  		$user->setName($name);
  	$name = $user->getName();
  	$data['name'] = $name;
  	$this->view('home/index', $data);
  }
}
