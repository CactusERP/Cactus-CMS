<?php

class AnnouncementsController extends AppController {

	public $name = 'Announcements';
	public $helpers = array('Html');

	function index() {
		$this -> set('announcements', $this->Announcement->find('all'));
	}

	function view($id = null){
		$this->set('announcement', $this->Announcement->read(NULL,$id));
	}

	 public function add() {
        if ($this->request->is('post')) {
            $this->Announcement->create();
            if ($this->Announcement->save($this->request->data)) {
                $this->Session->setFlash('Your Announcement has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Announcement.');
            }
        }
    }


	function delete($id=null) {
        if($id==null)
            die("No ID received");
        $this->Announcement->id=$id;
        if($this->Announcement->delete()==false)
            $this->Session->setFlash('The Announcement could not be deleted.');
        $this->redirect(array('action'=>'index'));
    }

   function edit($id = null) {
    $this->Announcement->id = $id;
    if (empty($this->data)) {
        $this->data = $this->Announcement->read();
    } else {
        if ($this->Announcement->save($this->data)) {
            $this->Session->setFlash('Your Announcement has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
   	}




}






?>