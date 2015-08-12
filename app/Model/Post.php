<?php

class Post extends AppModel{

	var $name = 'Post';
	
	public $validate = array(
        
        'title' => array(
            'rule' => 'notEmpty'
        )
    );

}


?>