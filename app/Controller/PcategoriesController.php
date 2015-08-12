<?php
class PcategoriesController extends AppController {

	public $name = 'Pcategories';

	function index() {

	$Categorylist = $this->Pcategory->generateTreeList(null,null,null," - ");
	$mydata = $this->Pcategory->find('all');
	$this->set('mydata',$mydata);
	$this->set(compact('Categorylist'));
	
	


	}




    function add() {
        if (!empty($this->data)) {
            $this->Pcategory->save($this->data);
            $this->redirect(array('action'=>'index'));
        } else {
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Pcategory->generateTreeList(null,null,null," - ");
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
            if($this->Pcategory->save($this->data)==false)
                $this->Session->setFlash('Error saving Category.');
            $this->redirect(array('action'=>'index'));
        } else {
            if($id==null) die("No ID received");
            $this->data = $this->Pcategory->read(null, $id);
            $parents[0] = "[ No Parent ]";
            $Categorylist = $this->Pcategory->generateTreeList(null,null,null," - ");
            if($Categorylist)
                foreach ($Categorylist as $key=>$value)
                    $parents[$key] = $value;
            $this->set(compact('parents'));
        }
    }

    function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Pcategory->id=$id;
        if($this->Pcategory->delete()==false)
            $this->Session->setFlash('The Category could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }

    function moveup($id=null) {
        if($id==null)
            die("No ID received");
        $this->Pcategory->id=$id;
        if($this->Pcategory->moveUp()==false)
            $this->Session->setFlash('The Category could not be moved up.');
        $this->redirect(array('action'=>'index'));
    }

    function movedown($id=null) {
        if($id==null)
            die("No ID received");
        $this->Pcategory->id=$id;
        if($this->Pcategory->moveDown()==false)
            $this->Session->setFlash('The Category could not be moved down.');
        $this->redirect(array('action'=>'index'));
    }
    function removeNode($id=null){
	if($id==null)
		die("Nothing to Remove");
	if($this->Pcategory->removeFromTree($id)==false)
		$this->Session->setFlash('The Category can\'t be removed.');
        $this->redirect(array('action'=>'index'));
    }

}
