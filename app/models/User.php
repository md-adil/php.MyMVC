<?php 
class User {
	private $name = "Adil";
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
}