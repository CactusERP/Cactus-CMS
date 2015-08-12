<?php

class Fcategory extends AppModel {
	public  $name = 'Fcategory';
    
    public  $actsAs = array('Tree');
    //public $actAs = array('Tree' => array('name' => 'Κατηγορία')); 
	
	function beforeSave() {

		$this->data[$this->alias]['default'] = 500;

		return true;
	}
	
    var $belongsTo = array(
		'ParentCategory' => array(
			'className' => 'Fcategory',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ChildCategory' => array(
			'className' => 'Fcategory',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>
