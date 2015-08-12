<?php
class Pagem extends AppModel{

	var $name = 'Pagem';


	public $validate = array(

	        'name' => array(
	            'rule' => 'notEmpty'
	        )
 
	        



    );



}

?>