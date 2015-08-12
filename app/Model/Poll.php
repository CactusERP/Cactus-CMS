<?php
class Poll extends AppModel {
	
	var $name = 'Poll';
	
	 public $validate = array(
        'question' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A question is required'
            )
        ),
        'answer_1' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A answer is required'
            )
        ),
        
        'answer_2' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A answer is required'
            )
        ),
        
        'answer_3' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A answer is required'
            )
        ),
        
        'answer_4' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A answer is required'
            )
        ),
        
        'answer_5' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A answer is required'
            )
        ),

        'active' => array(
            'valid' => array(
                'rule' => array('inList', array('yes', 'no')),
                'message' => 'Please enter a valid state',
                'allowEmpty' => false
            )
        )
    );




}




?>
