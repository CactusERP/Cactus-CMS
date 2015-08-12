<?php

	class PollsController extends AppController {

	public $name = 'Polls';
	
	
	public function index(){
		$this->Poll->recursive = 0;
		$this->set('polls' , $this->Poll->find('all'));
	}
	
	public function add() {
        if ($this->request->is('post')) {
            $this->Poll->create();
            if ($this->Poll->save($this->request->data)) {
                $this->Session->setFlash('Your Poll has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Poll.');
            }
        }
     }
    
   
	function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Poll->id=$id;
        if($this->Poll->delete()==false)
            $this->Session->setFlash('The Poll could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }
    
   	function edit($id = null) {
    $this->Poll->id = $id;
    if (empty($this->data)) {
        $this->data = $this->Poll->read();
    } else {
        if ($this->Poll->save($this->data)) {
            $this->Session->setFlash('Your Poll has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}



}


?>
