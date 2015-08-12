<?php
class BcategoriesController extends AppController {

	public $name = 'Bcategories';

	function index() {

	$Categorylist = $this->Bcategory->generateTreeList(null,null,null," - ");
	$mydata = $this->Bcategory->find('all');
	$this->set('mydata',$mydata);
	$this->set(compact('Categorylist'));
	
	


	}




    function add() {
        if (!empty($this->data)) {
            $this->Bcategory->save($this->data);
            $this->redirect(array('action'=>'index'));
        } else {
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Bcategory->generateTreeList(null,null,null," - ");
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
            if($this->Bcategory->save($this->data)==false)
                $this->Session->setFlash('Error saving Category.');
            $this->redirect(array('action'=>'index'));
        } else {
            if($id==null) die("No ID received");
            $this->data = $this->Bcategory->read(null, $id);
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Bcategory->generateTreeList(null,null,null," - ");
            if($Categorylist)
                foreach ($Categorylist as $key=>$value)
                    $parents[$key] = $value;
            $this->set(compact('parents'));
        }
    }

    function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Bcategory->id=$id;
        if($this->Bcategory->delete()==false)
            $this->Session->setFlash('The Category could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }

    function moveup($id=null) {
        if($id==null)
            die("No ID received");
        $this->Bcategory->id=$id;
        if($this->Bcategory->moveUp()==false)
            $this->Session->setFlash('The Category could not be moved up.');
        $this->redirect(array('action'=>'index'));
    }

    function movedown($id=null) {
        if($id==null)
            die("No ID received");
        $this->Bcategory->id=$id;
        if($this->Bcategory->moveDown()==false)
            $this->Session->setFlash('The Category could not be moved down.');
        $this->redirect(array('action'=>'index'));
    }
    function removeNode($id=null){
	if($id==null)
		die("Nothing to Remove");
	if($this->Bcategory->removeFromTree($id)==false)
		$this->Session->setFlash('The Category can\'t be removed.');
        $this->redirect(array('action'=>'index'));
    }

}
