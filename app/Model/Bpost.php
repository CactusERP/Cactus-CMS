<?php

class Bpost extends AppModel{

	var $name = 'Bpost';
	
	public $validate = array(
        
        'title' => array(
            'rule' => 'notEmpty'
        )
    );

}


?>