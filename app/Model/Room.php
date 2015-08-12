<?php

class Room extends AppModel{

	var $name = 'Room';
	
	
	public $belongsTo = array(
        'Hotel' => array(
            'className' => 'Hotel',
            'foreignKey' => 'hotel_id'
        )
    );
	
	public $validate = array(

	        
			'hotel_id' => array(
				'rule' => 'notEmpty'
	        ),

	        'name' => array(
				'rule' => 'notEmpty'
	        ),
			
			'type' => array(
				'rule' => 'notEmpty'
	        ),

	        'capacity' => array(
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