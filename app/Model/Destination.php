<?php

class Destination extends AppModel{

	var $name = 'Destination';
	
	public $useTable = 'destinations';
	
	function beforeSave() {

		$this->data[$this->alias]['default'] = 500;

		return true;
	}
	
	public $validate = array(

	        'name' => array(
	            'rule' => 'notEmpty'
	        ),
		
	       	
	      			
	        'status' => array(
			            'valid' => array(
			                'rule' => array('inList', array('in', 'out')),
			                'message' => 'Please enter a valid State',
			                'allowEmpty' => false
			            )
        	)
    );

}


?>