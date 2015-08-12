<?php

class GalleriesController extends AppController {

	public $name = 'Galleries';
	public $helpers = array('Html');
	
	public $components = array('Paginator' , 'FileUpload');
	

	
	function beforeFilter(){
    		parent::beforeFilter();
    		$this->FileUpload->fields = null;
  	}
	
	
    public $paginate = array(
        'limit' => 12,
        'order' => array('Gallery.created' => 'DESC')
    );

	
	function index() {
		$this->loadModel('Gallery');

		$this->Paginator->settings = $this->paginate;
		$this -> set('images',$this->Paginator->paginate('Gallery'));
		
	}
	
	
	
	 public function add() {		
		$this->loadModel('Gallery');	
		$this->loadModel('Gcategory');	
			$this -> set('Categorylist', $this->Gcategory->find('all'));
		
        if ($this->request->is('post')) {
            
			$this->Gallery->create();
			$this->request->data['Gallery']['image']= "Photos/Gallery/".$this->FileUpload->finalFile;
            $this->Gallery->save($this->request->data);
            $this->Session->setFlash('Your photo has been saved.');
            $this->redirect(array('action' => 'index'));
           
        }
    }
	
	
	function edit($id = null) {
		$this->loadModel('Gcategory');		
		$this -> set('Categorylist', $this->Gcategory->find('all'));
		$this->Gallery->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Gallery->read();
		} else {
			if ($this->Gallery->save($this->data)) {
				$this->Session->setFlash('Your photo has been updated.');
				$this->redirect(array('action' => 'index'));
			}		}
   	}
	
	
	
	
	
	function delete($id=null) {
        
        $this->Gallery->id=$id;
       
	    $this->Gallery->delete();
        
        $this->redirect(array('controller' => 'galleries' , 'action'=>'index'));
    }
	
}