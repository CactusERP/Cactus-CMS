<?php

class DetailsController extends AppController {

	public $name = 'Details';
	public $helpers = array('Html');

	
	function view(){
		$this->set('detail', $this->Detail->find('all'));
	}
	
	
}

?>