<?php

class ChoicesController extends AppController {

	public $uses = array('Choice');
	public $helpers = array('Html','Form');
	public $components = array('Paginator');
	



    public $paginate = array(
        'limit' => 30,
        'order' => array('Choice.updated_at' => 'DESC')
    );

	function index() {
	
		$this->Paginator->settings = $this->paginate;
		$this -> set('choices',$this->Paginator->paginate('Choice'));
	}

	
	
	
	public function add() {
		
		if ($this->request->is('post')) {
            $this->Choice->create();
		
         	$this->Choice->save($this->request->data);
		    $this->Session->setFlash('Your Choice has been saved.');
            $this->redirect(array('action' => 'index'));		}
    }
    
	
   
	function delete($id=null) {
        if($id==null)
        die("No ID received");
        $this->Choice->id=$id;
        if($this->Choice->delete()==false)
        $this->Session->setFlash('The Choice could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }
	
	
	
    
	function edit($id = null) {
		
		$this->Choice->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Choice->read();
		} else {
			if ($this->Choice->save($this->data)) {
				$this->Session->setFlash('Your Choice has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
   	}
	
	
}?>