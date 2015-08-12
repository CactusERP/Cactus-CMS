<?php
class Choice extends AppModel{
	
	var $name = 'Choice';
	public $useTable = 'Choices';
	
	function beforeSave() {

		$this->data[$this->alias]['default'] = 500;

		return true;
	}


	public $validate = array(

	        'Κωδικός' => array(
	            'rule' => 'notEmpty'
	        ),

			'Επιλογή' => array(
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