<?php
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
   public $helpers = array('Html' , 'Form');
   
   
   
   	public function _setErrorLayout() {  
     if ($this->name == 'CakeError') {  
        $this->layout = 'error';  
     }    
	}              

	public function beforeRender () {  
      $this->_setErrorLayout();
    
	}
   
   	public function webroot() {

	}



	public $components = array(
		'DebugKit.Toolbar',
		'Session',
		'Auth' => array(
				'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
				'logoutRedirect' => array('controller' => 'users' , 'action'=>'login'),
				'authError' => "You can't access that page",
				'authorize' => array('Controller')
		)
		
	
    

	);
	
	
	public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }

    // Default deny
    return false;
	}
	
	
	public function beforeFilter() {
		
		
	}
	
	
	
}