<?php

class BpostsController extends AppController {

	public $name = 'Bposts';
	public $helpers = array('Html');
	public $components = array('Paginator' , 'FileUpload');
	
	function beforeFilter(){
    		parent::beforeFilter();
    		$this->FileUpload->fields = null;
  	}


    public $paginate = array(
        'limit' => 10,
        'order' => array('Bpost.created' => 'DESC')
    );

	function index() {
		$this->loadModel('Bcategory');	
		$this->loadModel('User');

		$this->set('Categorylist', $this->Bcategory->find('all'));		
		$this -> set('Userlist', $this->User->find('all'));
		
		$this->Paginator->settings = $this->paginate;
		$this -> set('bposts',$this->Paginator->paginate('Bpost'));
	}

	function view($id = null){
		$this->set('bpost', $this->Bpost->read(NULL,$id));
	}
	
	
	public function add() {
		$this->loadModel('Bcategory');		
		$this->loadModel('User');
		$this -> set('Categorylist', $this->Bcategory->find('all'));				
		$this -> set('Userlist', $this->User->find('all'));
		if ($this->request->is('bpost')) {
            $this->Bpost->create();
			$this->request->data['Bpost']['image']= "Photos/".$this->FileUpload->finalFile;
         	$this->Bpost->save($this->request->data);
		    $this->Session->setFlash('Your post has been saved.');
            $this->redirect(array('action' => 'index'));		}
    }
    
	
   
	function delete($id=null) {
        if($id==null)
        die("No ID received");
        $this->Bpost->id=$id;
        if($this->Bpost->delete()==false)
        $this->Session->setFlash('The Category could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }
	
	
	
    
	function edit($id = null) {
		$this->loadModel('Bcategory');	
		$this->loadModel('User');
		$this -> set('Categorylist', $this->Bcategory->find('all'));
		$this -> set('Userlist', $this->User->find('all'));
		$this->Bpost->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Bpost->read();
		} else {
			if ($this->Bpost->save($this->data)) {
				$this->Session->setFlash('Your Bpost has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
   	}
	
	
	
	function bycategory($id = null){
		$this->loadModel('Bcategory');			
		$this->loadModel('User');	
		$this -> set('Categorylist', $this->Bcategory->find('all'));	
		$this -> set('Userlist', $this->User->find('all'));
		$this->Paginator->settings = array(
			'conditions' => array( 'Bpost.category' => $id ),
			'limit' => 10,
			'order' => array('Bpost.created' => 'DESC')		);
		$this->set('bposts',$this->Paginator->paginate('Post'));
		$this->set('catid',$id);
	}
}?>