<?php
class Detail extends AppModel{	
var $name = 'Detail';	

	public $validate = array('ID' => array('rule' => 'notEmpty' ),
	
	'OrederID' => array('rule' => 'notEmpty'),
	'ProductID' => array( 'rule' => 'notEmpty' ),
	'Amount' => array(	'rule' => 'notEmpty'  ), 
	'ProductName' => array(	'rule' => 'notEmpty'),
	'ProductPrice' => array('rule' => 'notEmpty'),	
	'SubTotal' => array('rule' => 'notEmpty'));

	}?>