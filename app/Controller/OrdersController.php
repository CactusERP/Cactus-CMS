<?php

class OrdersController extends AppController {

	public $name = 'Orders';
	public $helpers = array('Html');

	function index() {
		$this -> set('orders', $this->Order->find('all'));
	}

	function view($id = null){
		$this->loadModel('Detail');
		
		$this->set('order', $this->Order->read(NULL,$id));
		
		$this->set('details',$this->Detail->find('all', array('conditions' => array('Detail.OrderID' => $id))));
	}	
	



   function edit($id = null) {
    $this->Order->id = $id;
    if (empty($this->data)) {
        $this->data = $this->Order->read();
    } else {
        if ($this->Order->save($this->data)) {
            $this->Session->setFlash('Your Order has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}




}






?>