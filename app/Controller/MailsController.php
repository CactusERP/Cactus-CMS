<?php

class MailsController extends AppController {

	public $name = 'Mails';
	public $helpers = array('Html');

	function index() {
		$this -> set('mails', $this->Mail->find('all'));
	}

	
	
	 public function add() {
        if ($this->request->is('post')) {
            $this->Mail->create();
            if ($this->Mail->save($this->request->data)) {
                $this->Session->setFlash('Your Mail has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }
    
   
	function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Mail->id=$id;
        if($this->Mail->delete()==false)
            $this->Session->setFlash('The Mail could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }
    
   function edit($id = null) {
    $this->Mail->id = $id;
    if (empty($this->data)) {
        $this->data = $this->Mail->read();
    } else {
        if ($this->Mail->save($this->data)) {
            $this->Session->setFlash('Your Mail has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}




}






?>