<?php

class PagemsController extends AppController {

	public $name = 'Pagems';
	public $helpers = array('Html');
	

	function index() {
		$this->loadModel('User');
		$this -> set('Userlist', $this->User->find('all'));
		$this->set('pagems', $this->Pagem->find('all'));
	}

	function view($id = null){
		$this->set('pagem', $this->Pagem->read(NULL,$id));
	}
	
	 public function add() {
	 
	 $this->loadModel('User');
	 $this -> set('Userlist', $this->User->find('all'));
	 
        if ($this->request->is('post')) {
            $this->Pagem->create();
            if ($this->Pagem->save($this->request->data)) {
               
				
			
				$file = new File("'../../../../../Pages/".$this->request->data['Pagem']['name'].".php", true, 0777);
				$file->write($this->request->data['Pagem']['body']);
				$file->close();
				$this->Session->setFlash('Your page has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your page.');
            }
        }
		
		
    }
    
   
	function delete($id=null) {
		$this->Pagem->id = $id;
		$page = $this->Pagem->read(null,$id);
		$file = new File("'../../../../../Pages/".$page['Pagem']['name'].".php", false, 0777);
		$file->delete();
		
        if($id==null)
            die("No ID received");
        $this->Pagem->id=$id;
        if($this->Pagem->delete()==false)
			
            $this->Session->setFlash('The Page could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }
    
   function edit($id = null) {
   
	    $this->loadModel('User');
		$this -> set('Userlist', $this->User->find('all'));
		$this->Pagem->id = $id;
		$page = $this->Pagem->read(null,$id);
		
		$file = new File("'../../../../../Pages/".$page['Pagem']['name'].".php", false, 0777);
		$this -> set('mybody' ,$file->read());
		
    if (empty($this->data)) {
	
        $this->data = $this->Pagem->read();
		
    } else {
        if ($this->Pagem->save($this->data)) {
			$file = new File("'../../../../../Pages/".$this->request->data['Pagem']['name'].".php", false, 0777);
			$file->delete ();
			$file = new File("'../../../../../Pages/".$this->request->data['Pagem']['name'].".php", true, 0777);
			$file->append($this->request->data['Pagem']['body']);
			$file->close();
            $this->Session->setFlash('Your Page has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}




}






?>