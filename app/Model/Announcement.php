<?php

class Announcement extends AppModel{

	var $name = 'Announcement';

	public $validate = array(

        'title' => array(
            'rule' => 'notEmpty'
        ),


		'body' => array(
            'rule' => 'notEmpty'
        )
    );

}


?>