<?php
class AttributesController extends AppController {

	public $name = 'Attributes';

	function index() {
	
	$Categorylist = $this->Attribute->generateTreeList(null,null,null," - ");
	 
	$this->set(compact('Categorylist'));
	
	
	}
	
	


    function add() {
		
		
        if (!empty($this->data)) {
            $this->Attribute->save($this->data);
            $this->redirect(array('action'=>'index'));
        } else {
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Attribute->generateTreeList(null,null,null," - ");
            if($Categorylist){
                foreach ($Categorylist as $key=>$value){
                    $parents[$key] = $value;
		    }
		$this->set(compact('parents'));
	    }
        }
    }

    function edit($id=null) {
		
		
        if (!empty($this->data)) {
            if($this->Attribute->save($this->data)==false)
                $this->Session->setFlash('Error saving Category.');
            $this->redirect(array('action'=>'index'));
        } else {
            if($id==null) die("No ID received");
            $this->data = $this->Attribute->read(null, $id);
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Attribute->generateTreeList(null,null,null," - ");
            if($Categorylist) 
                foreach ($Categorylist as $key=>$value)
                    $parents[$key] = $value;
            $this->set(compact('parents'));
        }
    }

    function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Attribute->id=$id;
        if($this->Attribute->delete()==false)
            $this->Session->setFlash('The Category could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }

    function moveup($id=null) {
        if($id==null)
            die("No ID received");
        $this->Attribute->id=$id;
        if($this->Attribute->moveUp()==false)
            $this->Session->setFlash('The Category could not be moved up.');
        $this->redirect(array('action'=>'index'));
    }

    function movedown($id=null) {
        if($id==null)
            die("No ID received");
        $this->Attribute->id=$id;
        if($this->Attribute->moveDown()==false)
            $this->Session->setFlash('The Category could not be moved down.');
        $this->redirect(array('action'=>'index'));
    }
    function removeNode($id=null){
	if($id==null)
		die("Nothing to Remove");
	if($this->Attribute->removeFromTree($id)==false)
		$this->Session->setFlash('The Category can\'t be removed.');
        $this->redirect(array('action'=>'index'));	
    }
    
}
