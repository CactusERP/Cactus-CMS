<?php

class FoodsController extends AppController {

	
	public $uses = array('Food');
	public $helpers = array('Html','Form');
	public $components = array('Paginator');

	
    public $paginate = array(
        'limit' => 10,
        'order' => array('Food.updated_at' => 'DESC')
    );


	
	
	
	function index() {
		$this->loadModel('Fcategory');	
		

		$this->set('Categorylist', $this->Fcategory->find('all'));	
		
				
		$this->Paginator->settings = $this->paginate;
		$this -> set('foods',$this->Paginator->paginate('Food'));
	}

	function view($id = null){
		$this->set('food', $this->Food->read(NULL,$id));
	}

	public function add() {
	 	$this->loadModel('Fcategory');
		$this -> set('Categorylist', $this->Fcategory->find('all'));
		
		$this->loadModel('Choice');
		$this -> set('Categorylist2', $this->Choice->find('all'));
		
		if ($this->request->is('post')) {
		$my_choices = '';
		$i = 1;
		foreach($this->request->data['Food']['Επιλογή_1'] as $ch){
			if($i == sizeof($this->request->data['Food']['Επιλογή_1'])){
				$my_choices = $my_choices."".$ch;
				
			}
			else{
				$my_choices = $ch.",".$my_choices;
			}
		$i++;
		}

		$this->Food->create();
		$this->Food->set(array(
					'Κωδικός' => $this->request->data['Food']['Κωδικός'],
					'Ονομασία' => $this->request->data['Food']['Ονομασία'],
					'Κατηγορία' => $this->request->data['Food']['Κατηγορία'],
					'Τιμή' => $this->request->data['Food']['Τιμή'],
					'Τιμή_ιδιοκατανάλωσης' => $this->request->data['Food']['Τιμή_ιδιοκατανάλωσης'],
					'Ποσοστό_ΦΠΑ' => $this->request->data['Food']['Ποσοστό_ΦΠΑ'],
					'Διαθεσιμότητα' => $this->request->data['Food']['Διαθεσιμότητα'],
					'Προτεραιότητα' => $this->request->data['Food']['Προτεραιότητα'],
					'Εκτυπωτής' => $this->request->data['Food']['Εκτυπωτής'],
					'Επιλογή_1' => $my_choices,
					'update_at' => $this->request->data['Food']['updated_at_date']." ".$this->request->data['Food']['updated_at_time'],
					'status' => $this->request->data['Food']['status'] ,
					'created' => $this->request->data['Food']['created']
					));
			
			if ($this->Food->save()) {
			
			
				$this->Session->setFlash('Your Food has been saved.');
				$this->redirect(array("action" => "index"));
			}
			else{
				$this->Session->setFlash(__('The Food could not be saved. Please, try again.'));
			}
		
          
       		
       	}
    }




    function delete($id=null) {

	$this->request->data = $this->Food->findById($id);
 	
	if($id==null)
            die("No ID received");
        $this->Food->id=$id;
        if($this->Food->delete()==false)
            $this->Session->setFlash('The Food could not be deleted.');
        else
        {
        	 $this->Session->setFlash('The Food has been deleted.');
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