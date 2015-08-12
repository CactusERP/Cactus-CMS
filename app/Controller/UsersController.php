<?php


class UsersController extends AppController {

	public $name = 'Users';
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

	public function login(){
		$this->layout='login';
		if ($this->request->is('post')) {
			if ($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			
			} else {
				$this->Session->setFlash('Your username/password was incorrect');
			}
		}
		
	
	}
	
	public function logout(){
		$this->redirect($this->Auth->logout());
	}
	
	
	public function index(){
		$this->User->recursive = 0;
		$this->set('users' , $this->User->find('all'));
	}
	
	public function view($id = null) {
		$this->User->id = $id;
		
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		
		if (!$id){
			$this->Session->setFlash('Invalid user');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user' , $this->User->read());
	 }


	public function add() {
		if ($this->request->is('post')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user not be saved. Please, try again.');
			}
		}
	}
	
	 public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
