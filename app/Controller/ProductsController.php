<?php

class ProductsController extends AppController {

	public $name = 'Products';
	public $helpers = array('Html','Form');

	
	public $components = array('Paginator' , 'FileUpload');

	function beforeFilter(){
    		parent::beforeFilter();
    		$this->FileUpload->fields = null;
  	}

	
    public $paginate = array(
        'limit' => 10,
        'order' => array('Product.created' => 'DESC')
    );


	function index() {
		$this->loadModel('Pcategory');	
		$this->loadModel('User');

		$this->set('Categorylist', $this->Pcategory->find('all'));		
		$this -> set('Userlist', $this->User->find('all'));
		
		$this->Paginator->settings = $this->paginate;
		$this -> set('products',$this->Paginator->paginate('Product'));
	}

	function view($id = null){
		$this->set('product', $this->Product->read(NULL,$id));
	}

	public function add() {
	 	$this->loadModel('Pcategory');

			$this -> set('Categorylist', $this->Pcategory->find('all'));
		if ($this->request->is('post')) {

           		$this->Product->create();

			//$this->FileUpload->myfilename = $this->request->data['Product']['Name'];
			$this->request->data['Product']['image']= "Photos/Products/".$this->FileUpload->finalFile;

			$this->Product->save($this->request->data);
		
          		$this->Session->setFlash('Your Product has been saved.');
				$this->redirect(array("action" => "index"));
       		//	Router::connect('', array('controller' => 'ProductsController', 'action' => 'index'));
       	}
    }




    function delete($id=null) {

	$this->request->data = $this->Product->findById($id);
 	$this->FileUpload->removeFile($this->data['Product']['Name']);// data['Product']['photo']

	if($id==null)
            die("No ID received");
        $this->Product->id=$id;
        if($this->Product->delete()==false)
            $this->Session->setFlash('The Product could not be deleted.');
        else
        {
        	 $this->Session->setFlash('The Product has been deleted.');
       		 $this->redirect(array('action'=>'index'));
    	}
    }





   function edit($id = null) {
	$this->loadModel('Pcategory');
	$this -> set('Categorylist', $this->Pcategory->find('all'));
    
	$this->Product->id = $id;
    $this->temp=$this->Product->read();
    if (empty($this->data)) {
        $this->data = $this->Product->read();
    } else {
    	//$vall=$this->temp['Product']['Name'];
		//$this->FileUpload->removeFile($vall);

		//$this->request->data['Product']['photo']= $this->FileUpload->pathname;

        if ($this->Product->save($this->data)) {
            $this->Session->setFlash('Your Product has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}

	function ByCategory($id = null){
		$this->loadModel('Pcategory');


			$this -> set('Categorylist', $this->Pcategory->find('all'));
			$this->set('products', $this->Product->find( 'all', array ( 'conditions' => array( 'Product.Category' => $id ))));
			$this->set('catid',$id);

			//$this->Product->read(NULL,$id));
	}


}






?>