<?php

class MembersController extends AppController {


	public $name = 'Members';
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	public function index() {
		$this -> set('members', $this->Member->find('all'));
	}

	public function add() {
	
        if ($this->request->is('post')) {
        
            $this->Member->create();
            
            if ($this->Member->save($this->request->data)){
                $this->Session->setFlash('Your Member has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Member.');
            }
        }
    }
    
    
	public function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Member->id=$id;
        if($this->Member->delete()==false)
            $this->Session->setFlash('The Member could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }
    
    function edit($id = null) {
    $this->Member->id = $id;
    if (empty($this->data)) {
        $this->data = $this->Member->read();
    } else {
        if ($this->Member->save($this->data)) {
            $this->Session->setFlash('Your Member has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
	}

    
   


}

?>
