<?php

class RoomsController extends AppController {

	
	public $uses = array('Room');
	public $helpers = array('Html','Form');
	public $components = array('Paginator');

	
    public $paginate = array(
        'limit' => 10,
        'order' => array('Room.updated_at' => 'DESC')
    );


	
	
	
	function index() {
		$this->loadModel('Hotel');	
		
		$this->set('Categorylist', $this->Hotel->find('all'));	
		
		$this->Paginator->settings = $this->paginate;
		$this -> set('rooms',$this->Paginator->paginate('Room'));
	}



	public function add() {
	 	
		$this->loadModel('Hotel');
		$this -> set('Categorylist', $this->Hotel->find('all'));
		
		if ($this->request->is('post')) {
		
		$this->Room->create();
			
			if ($this->Room->save()) {
				$this->Session->setFlash('Your Room has been saved.');
				$this->redirect(array("action" => "index"));
			}
			else{
				$this->Session->setFlash(__('The Room could not be saved. Please, try again.'));
			}
		
       	}
    }




    function delete($id=null) {

	$this->request->data = $this->Room->findById($id);
 	
	if($id==null)
            die("No ID received");
        $this->Room->id=$id;
        if($this->Room->delete()==false)
            $this->Session->setFlash('The Room could not be deleted.');
        else
        {
        	 $this->Session->setFlash('The Room has been deleted.');
       		 $this->redirect(array('action'=>'index'));
    	}
    }





   function edit($id = null) {
	$this->loadModel('Hotel');
	$this -> set('Categorylist', $this->Hotel->find('all'));
    
	$this->Room->id = $id;
    $this->temp=$this->Room->read();
    if (empty($this->data)) {
        $this->data = $this->Room->read();
    } else {
    	//$vall=$this->temp['Product']['Name'];
		//$this->FileUpload->removeFile($vall);

		//$this->request->data['Product']['photo']= $this->FileUpload->pathname;

        if ($this->Food->save($this->data)) {
            $this->Session->setFlash('Your Room has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}

	function bycategory($id = null){
		$this->loadModel('Hotel');		
		
		$this -> set('Categorylist',$this->Hotel->find('all'));			
		
		$this->Paginator->settings = array(
			'conditions' => array( 'Room.hotel_id' => $id ),
			'limit' => 10,
			'order' => array('Room.created' => 'DESC')	
		);
		$this->set('rooms',$this->Paginator->paginate('Room'));
		$this->set('catid',$id);
	}

}






?>