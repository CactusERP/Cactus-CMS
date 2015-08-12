<?php

class Hotel extends AppModel{

	var $name = 'Hotel';
	public $useTable = 'hotels';
	
	function beforeSave() {

		$this->data[$this->alias]['default'] = 500;

		return true;
	}
	
		
	public $belongsTo = array(
        'Destination' => array(
            'className' => 'Destination',
            'foreignKey' => 'destination_id'
        )
    );
	
	
	
	public $validate = array(

	        'name' => array(
	            'rule' => 'notEmpty'
	        ),

			'type' => array(
				'rule' => 'notEmpty'
	        ),

	        'destination_id' => array(
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