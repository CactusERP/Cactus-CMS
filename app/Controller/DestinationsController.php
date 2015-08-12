<?php

class DestinationsController extends AppController {

	
	public $uses = array('Destination');
	public $helpers = array('Html','Form');
	public $components = array('Paginator' , 'FileUpload');

	
    public $paginate = array(
        'limit' => 10,
        'order' => array('Destination.created' => 'DESC')
    );


	
	
	
	function index() {
		
				
		$this->Paginator->settings = $this->paginate;
		$this -> set('destinations',$this->Paginator->paginate('Destination'));
	}

	

	public function add() {
	 	$this->loadModel('Destination');
		$this -> set('destinationlist', $this->Destination->find('all'));
		
		if ($this->request->is('post')) {
            $this->Destination->create();
			$this->request->data['Destination']['image']= "Photos/Destinations/".$this->FileUpload->finalFile;
			
         	if ($this->Destination->save($this->request->data)) {
			
				$this->Session->setFlash('Your Destination has been saved.');
				$this->redirect(array("action" => "index"));
			}
			else{
				$this->Session->setFlash(__('The Destination could not be saved. Please, try again.'));
			}
		
		}
		
    }




    function delete($id=null) {

	$this->request->data = $this->Destination->findById($id);
 	
	if($id==null)
            die("No ID received");
        $this->Destination->id=$id;
        if($this->Destination->delete()==false){
            $this->Session->setFlash('The Destination could not be deleted.');
		}
        else
        {
        	 $this->Session->setFlash('The Destination has been deleted.');
       		 $this->redirect(array('action'=>'index'));
    	}
    }





	function edit($id = null) {
	
		$this->Destination->id = $id;
		$this->temp=$this->Destination->read();
			if (empty($this->data)) {
				$this->data = $this->Destination->read();
			} else {
				//$vall=$this->temp['Product']['Name'];
				//$this->FileUpload->removeFile($vall);

				//$this->request->data['Product']['photo']= $this->FileUpload->pathname;

				if ($this->Destination->save($this->data)) {
					$this->Session->setFlash('Your Destination has been updated.');
					$this->redirect(array('action' => 'index'));
				}
			}
   	}

	

}






?>