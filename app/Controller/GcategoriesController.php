<?php
class GcategoriesController extends AppController {

	public $name = 'Gcategories';

	function index() {
	$this->loadModel('Post');	
	$this -> set('posts', $this->Post->find('all'));
	
	
	$this->set('gcategories', $this->Gcategory->find('all'));

	$Categorylist = $this->Gcategory->generateTreeList(null,null,null," - ");

	$this->set(compact('Categorylist'));


	}




    function add() {
		$this->loadModel('Post');	
		$this->set('posts', $this->Post->find('all'));
		
        if (!empty($this->data)) {
            $this->Gcategory->save($this->data);
            $this->redirect(array('action'=>'index'));
        } else {
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Gcategory->generateTreeList(null,null,null," - ");
            if($Categorylist){
                foreach ($Categorylist as $key=>$value){
                    $parents[$key] = $value;
		    }
		$this->set(compact('parents'));
	    }
        }
    }

    function edit($id=null) {
		$this->loadModel('Post');	
		$this->set('posts', $this->Post->find('all'));
		
        if (!empty($this->data)) {
            if($this->Gcategory->save($this->data)==false)
                $this->Session->setFlash('Error saving Category.');
            $this->redirect(array('action'=>'index'));
        } else {
            if($id==null) die("No ID received");
            $this->data = $this->Gcategory->read(null, $id);
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Gcategory->generateTreeList(null,null,null," - ");
            if($Categorylist)
                foreach ($Categorylist as $key=>$value)
                    $parents[$key] = $value;
            $this->set(compact('parents'));
        }
    }

    function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Gcategory->id=$id;
        if($this->Gcategory->delete()==false)
            $this->Session->setFlash('The Category could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }

    function moveup($id=null) {
        if($id==null)
            die("No ID received");
        $this->Gcategory->id=$id;
        if($this->Gcategory->moveUp()==false)
            $this->Session->setFlash('The Category could not be moved up.');
        $this->redirect(array('action'=>'index'));
    }

    function movedown($id=null) {
        if($id==null)
            die("No ID received");
        $this->Gcategory->id=$id;
        if($this->Gcategory->moveDown()==false)
            $this->Session->setFlash('The Category could not be moved down.');
        $this->redirect(array('action'=>'index'));
    }
    function removeNode($id=null){
	if($id==null)
		die("Nothing to Remove");
	if($this->Gcategory->removeFromTree($id)==false)
		$this->Session->setFlash('The Category can\'t be removed.');
        $this->redirect(array('action'=>'index'));
    }

}
