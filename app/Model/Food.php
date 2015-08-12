<?php
class Food extends AppModel{
	
	public $useTable = 'Foods';
	
	function beforeSave() {

		$this->data[$this->alias]['default'] = 500;

		return true;
	}


	public $validate = array(

	        'Κωδικός' => array(
	            'rule' => 'notEmpty'
	        ),

			'Κατηγορία' => array(
				'rule' => 'notEmpty'
	        ),

	        'Τιμή' => array(
				'rule' => 'notEmpty'
	        ),
			
			'Τιμή_ιδιοκατανάλωσης' => array(
				'rule' => 'notEmpty'
	        ),

	        'Ποσοστό_ΦΠΑ' => array(
				'rule' => 'notEmpty'
	        ),
			'Εκτυπωτής' => array(
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