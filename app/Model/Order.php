<?php

class Order extends AppModel{

	var $name = 'Order';

	public $validate = array(

        'ID' => array(
            'rule' => 'notEmpty'
        ),

		'First_Name' => array(
            'rule' => 'notEmpty'
        ),

		'Last_Name' => array(
		    'rule' => 'notEmpty'
        ),
        'Phone' => array(
			'rule' => 'notEmpty'
        ),
        'Email' => array(
			'rule' => 'notEmpty'
        ),
        'Country' => array(
			'rule' => 'notEmpty'
		),
		'City' => array(
			'rule' => 'notEmpty'
		),
		
		'Address' => array(
			'rule' => 'notEmpty'
		),
		'Postal_Code' => array(
			'rule' => 'notEmpty'
		),
		'Post_Method' => array(
			'rule' => 'notEmpty'
		),
		'Payment_Method' => array(
			'rule' => 'notEmpty'
		),
		'Cost' => array(
			'rule' => 'notEmpty'
		),
		'State' => array(
			'rule' => 'notEmpty'
		),
		'Date' => array(
			'rule' => 'notEmpty'
		)
    );

}


?>