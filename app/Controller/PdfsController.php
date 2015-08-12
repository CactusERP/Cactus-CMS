<?php

class PdfsController extends AppController {

	public $name = 'Pdfs';
	public $helpers = array('Html','Form');
  	var $components = array('FileUpload');

	function beforeFilter(){
    		parent::beforeFilter();
    		$this->FileUpload->fields = null;
  	}
	
	function index() {
		$this->loadModel('Bpost');	
		$this -> set('bposts', $this->Bpost->find('all'));
	  
		$this -> set('pdfs', $this->Pdf->find('all'));
		
	}
	
	function view($id = null){
		$this->set('pdf', $this->Pdf->read(NULL,$id));
	}
	
	public function add() {
		$this->loadModel('Bpost');	
		$this -> set('bposts', $this->Bpost->find('all'));
	 	
		if ($this->request->is('post')) {

          	$this->Pdf->create();

			$this->request->data['Pdf']['image']= "PDFFiles/".$this->FileUpload->finalFile;
			$this->Pdf->save($this->request->data);
		
         	$this->Session->setFlash('Your Product has been saved.');
			$this->redirect(array("action" => "index"));
       		//	Router::connect('', array('controller' => 'ProductsController', 'action' => 'index'));
       		}
    }
	
	
    function delete($id=null) {

	 $this->request->data = $this->Pdf->findById($id);
 		$this->FileUpload->removeFile($this->data['Pdf']['image']);// data['Product']['photo']

	if($id==null)
            die("No ID received");
        $this->Pdf->id=$id;
        if($this->Pdf->delete()==false)
            $this->Session->setFlash('The Pdf could not be deleted.');
        else
        {
        	 $this->Session->setFlash('The Pdf has been deleted.');
       		 $this->redirect(array('action'=>'index'));
    	}
    }

	
	
   function edit($id = null) {
	$this->loadModel('Bpost');	
	$this -> set('bposts', $this->Bpost->find('all'));
	 	
	$this->Pdf->id = $id;
    $this->temp=$this->Pdf->read();
    if (empty($this->data)) {
        $this->data = $this->Pdf->read();
    } else {
		if($this->FileUpload->finalFile == ""){
			$this->request->data['Pdf']['image']= $this->temp['Pdf']['image'];
		}
		else{
			$pieces = explode("/", $this->temp['Pdf']['image']);

			$vall=$pieces[1];
			$this->FileUpload->removeFile($vall);

			$this->request->data['Pdf']['image']= "PDFFiles/".$this->FileUpload->finalFile;
		
		}
        if ($this->Pdf->save($this->data)) {
            $this->Session->setFlash('Your Pdf has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}

}
?>