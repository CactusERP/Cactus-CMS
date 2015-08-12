<?php
class Product extends AppModel{

	var $name = 'Product';


	public $validate = array(

	        'Name' => array(
	            'rule' => 'notEmpty'
	        ),

			'Category' => array(
				'rule' => 'notEmpty'
	        ),

	        'Price' => array(
				'rule' => 'notEmpty'
	        ),

	        'VAT' => array(
				'rule' => 'notEmpty'
	        ),
	        'State' => array(
			            'valid' => array(
			                'rule' => array('inList', array('in', 'out')),
			                'message' => 'Please enter a valid State',
			                'allowEmpty' => false
			            )
        	)



    );



}

?>