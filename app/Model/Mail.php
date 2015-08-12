<?php
class Mail extends AppModel {
	
	var $name = 'Mail';
	
	 public $validate = array(
      
        
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A name is required'
            )
        ),
        
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A email is required'
            )
        ),

        'confirm' => array(
            'valid' => array(
                'rule' => array('inList', array('no', 'yes')),
                'message' => 'Please enter a valid state',
                'allowEmpty' => false
            )
        )
    );




}




?>
