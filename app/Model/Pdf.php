<?php

class Pdf extends AppModel{

	var $name = 'Pdf';
	
	public $validate = array(
        
        'title' => array(
            'rule' => 'notEmpty'
        )
    );

}


?>