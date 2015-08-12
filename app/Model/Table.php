<?php
class Table extends AppModel{
	
	public $useTable = 'Tables';
	
	function beforeSave() {

		$this->data[$this->alias]['default'] = 500;

		return true;
	}


	public $validate = array(

	        'Κωδικός' => array(
	            'rule' => 'notEmpty'
	        ),

			'Άτομα' => array(
				'rule' => 'notEmpty'
	        ),

	        'Μέρος' => array(
				'rule' => 'notEmpty'
	        ),
			
			'Κατάσταση' => array(
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