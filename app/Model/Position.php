<?php



class Position extends AppModel{


	
	public $name = 'Position';

	public $validate = array(

        

        'title' => array(

            'rule' => 'notEmpty'

        )

    );

	


}





?>