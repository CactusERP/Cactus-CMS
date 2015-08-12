<?php

class HotelsController extends AppController {

	
	public $uses = array('Hotel');
	public $helpers = array('Html','Form');
	public $components = array('Paginator');

	
    public $paginate = array(
        'limit' => 10,
        'order' => array('Hotel.created' => 'DESC')
    );


	
	
	
	function index() {
		$this->loadModel('Destination');	
		$this->set('Categorylist', $this->Destination->find('all'));	
						
		$this->Paginator->settings = $this->paginate;
		$this -> set('hotels',$this->Paginator->paginate('Hotel'));
	}

	
	public function add() {
	 	
		$this->loadModel('Destination');	
		$this->set('Categorylist', $this->Destination->find('all'));	
		
		if ($this->request->is('post')) {
		
		$this->Hotel->create();
		
			if ($this->Hotel->save()) {
			
			
				$this->Session->setFlash('Your Hotel has been saved.');
				$this->redirect(array("action" => "index"));
			}
			else{
				$this->Session->setFlash(__('The Hotel could not be saved. Please, try again.'));
			}
	   	}
    }




    function delete($id=null) {

	$this->request->data = $this->Hotel->findById($id);
 	
	if($id==null)
            die("No ID received");
        $this->Hotel->id=$id;
        if($this->Hotel->delete()==false)
            $this->Session->setFlash('The Hotel could not be deleted.');
        else{
        	$this->Session->setFlash('The Hotel has been deleted.');
       		$this->redirect(array('action'=>'index'));
    	}
    }





   function edit($id = null) {
	$this->loadModel('Fcategory');
	$this -> set('Categorylist', $this->Fcategory->find('all'));
    
	$this->Food->id = $id;
    $this->temp=$this->Food->read();
    if (empty($this->data)) {
        $this->data = $this->Food->read();
    } else {
    	//$vall=$this->temp['Product']['Name'];
		//$this->FileUpload->removeFile($vall);

		//$this->request->data['Product']['photo']= $this->FileUpload->pathname;

        if ($this->Food->save($this->data)) {
            $this->Session->setFlash('Your Food has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}

	function bycategory($id = null){
		$this->loadModel('Fcategory');		
		
		$this -> set('Categorylist',$this->Fcategory->find('all'));			
		
		$this->Paginator->settings = array(
			'conditions' => array( 'Food.Κατηγορία' => $id ),
			'limit' => 10,
			'order' => array('Food.updated_at' => 'DESC')	
		);
		$this->set('foods',$this->Paginator->paginate('Food'));
		$this->set('catid',$id);
	}

}






?>