<?php

class PostsController extends AppController {

	public $name = 'Posts';
	public $helpers = array('Html');
	public $components = array('Paginator' , 'FileUpload');
	
	function beforeFilter(){
    		parent::beforeFilter();
    		$this->FileUpload->fields = null;
  	}


    public $paginate = array(
        'limit' => 10,
        'order' => array('Post.created' => 'DESC')
    );

	function index() {
		$this->loadModel('Mcategory');	
		$this->loadModel('User');

		$this->set('Categorylist', $this->Mcategory->find('all'));		
		$this -> set('Userlist', $this->User->find('all'));
		
		$this->Paginator->settings = $this->paginate;
		$this -> set('posts',$this->Paginator->paginate('Post'));
	}

	function view($id = null){
		$this->set('post', $this->Post->read(NULL,$id));
	}
	
	
	public function add() {
		$this->loadModel('Mcategory');		
		$this->loadModel('User');
		
		$this -> set('Categorylist', $this->Mcategory->find('all'));		
		$this -> set('Userlist', $this->User->find('all'));
		if ($this->request->is('post')) {
            $this->Post->create();
			$this->request->data['Post']['image']= "Photos/".$this->FileUpload->finalFile;
         	$this->Post->save($this->request->data);
		    $this->Session->setFlash('Your post has been saved.');
            $this->redirect(array('action' => 'index'));		}
    }
    
	
   
	function delete($id=null) {
        if($id==null)
        die("No ID received");
        $this->Post->id=$id;
        if($this->Post->delete()==false)
        $this->Session->setFlash('The Category could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }
	
	
	
    
	function edit($id = null) {
		$this->loadModel('Mcategory');		
		$this->loadModel('User');
		$this -> set('Categorylist', $this->Mcategory->find('all'));	
		$this -> set('Userlist', $this->User->find('all'));
		$this->Post->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Post->read();
		} else {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
   	}
	
	
	
	function bycategory($id = null){
		$this->loadModel('Mcategory');		
		$this->loadModel('User');		
		$this -> set('Categorylist',$this->Mcategory->find('all'));			
		$this -> set('Userlist', $this->User->find('all'));
		$this->Paginator->settings = array(
			'conditions' => array( 'Post.category' => $id ),
			'limit' => 10,
			'order' => array('Post.created' => 'DESC')		);
		$this->set('posts',$this->Paginator->paginate('Post'));
		$this->set('catid',$id);
	}
}?>