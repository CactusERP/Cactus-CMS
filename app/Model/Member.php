<?php

class Member extends AppModel{

	var $name = 'Member';
	
	public $validate = array(
        
        'First_Name' => array(
            'rule' => 'notEmpty'
        ),
       
        'Last_Name' => array(
            'rule' => 'notEmpty'
        ),
        
		'Email' => array(
            'rule' => 'email'
        ),
        
        'Phone' => array(
            'rule'=> 'notEmpty' 
        ),

		'Chair' => array(
            'rule' => 'notEmpty'
        )
    );


}
?>
